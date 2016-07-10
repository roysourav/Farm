<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Suppliers</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Suppliers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Supplier</th>
                                            <th> Id</th>
                                            <th> Category</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $suppliers as $supplier ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($supplier->img, $supplier->name, array('class' => 'img-responsive '))); ?></td>

                                            <td><?php echo e($supplier->name); ?></td>
                                            <td><?php echo e('S-'.$supplier->id); ?></td>
                                            <?php if( $supplier->cat == 'cow' ): ?>
                                            <td><?php echo e('Cow Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'food' ): ?>
                                            <td><?php echo e('Food Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'medicine' ): ?>
                                            <td><?php echo e('Medicine Supplier'); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e('Seed Supplier'); ?></td>
                                            <?php endif; ?>

                                            <td>
                                            <a title=""  href="tel:<?php echo e($supplier->mobile); ?>"> <?php echo e($supplier->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($supplier->email); ?></td>
                                            <td><?php echo e($supplier->account_no); ?></td>
                                            <td><?php echo e($supplier->bank_name); ?></td>
                                            <td><?php echo e($supplier->branch_name); ?></td>

                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'supplier.show', array( 'id'=> $supplier->id ) )); ?>">Show</a>

                                            <a class="label label-warning" href="<?php echo e(route( 'supplier.edit', array( 'id'=> $supplier->id ) )); ?>">Edit</a>

                                          
                                                
                                                <?php echo Form::open( array( 'route' => array('supplier.destroy', $supplier->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => '' ) ); ?>

                                              
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