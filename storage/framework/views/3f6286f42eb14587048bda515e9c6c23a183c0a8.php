<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Cow Sellers</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Cow Sellers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow Seller</th>
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
                                    <?php foreach( $cowsellers as $cowseller ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;"><?php echo e($count); ?></td>
                                            <td style="display: block;margin: 0 auto;width: 60px;"> <?php echo e(Html::image($cowseller->img, $cowseller->name, array('class' => 'img-responsive '))); ?></td>
                                            <td><?php echo e($cowseller->name); ?></td>
                                            <td><?php echo e('CS-'.$cowseller->id); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($cowseller->mobile); ?>"> <?php echo e($cowseller->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($cowseller->email); ?></td>
                                            <td><?php echo e($cowseller->account_no); ?></td>
                                            <td><?php echo e($cowseller->bank_name); ?></td>
                                            <td><?php echo e($cowseller->branch_name); ?></td>

                                             

                                            <td><a class="btn btn-success" href="<?php echo e(route( 'cowseller.show', array( 'id'=> $cowseller->id ) )); ?>">Show</a></td>


                                            <td><a class="btn btn-warning" href="<?php echo e(route( 'cowseller.edit', array( 'id'=> $cowseller->id ) )); ?>">Edit</a></td>

                                            <td>
                                                
                                                <?php echo Form::open( array( 'route' => array('cowseller.destroy', $cowseller->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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