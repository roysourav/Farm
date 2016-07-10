<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Suppliers</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Suppliers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Of Supplier</th>
                                            <th> Id</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $suppliers as $supplier ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;"><?php echo e($count); ?></td>
                                            <td><?php echo e($supplier->name); ?></td>
                                            <td><?php echo e('S-'.$supplier->id); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($supplier->mobile); ?>"> <?php echo e($supplier->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($supplier->email); ?></td>
                                            <td><?php echo e($supplier->account_no); ?></td>
                                            <td><?php echo e($supplier->bank_name); ?></td>
                                            <td><?php echo e($supplier->branch_name); ?></td>

                                             

                                            <td><a class="btn btn-success" href="<?php echo e(route( 'supplier.show', array( 'id'=> $supplier->id ) )); ?>">Show</a></td>


                                            <td><a class="btn btn-warning" href="<?php echo e(route( 'supplier.edit', array( 'id'=> $supplier->id ) )); ?>">Edit</a></td>

                                            <td>
                                                
                                                <?php echo Form::open( array( 'route' => array('supplier.destroy', $supplier->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => 'btn btn-danger' ) ); ?>

                                              
                                                <?php echo Form::close(); ?>


                                            </td>

                                            
                                        </tr>

                                    <?php endforeach; ?>  
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>