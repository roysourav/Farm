<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Doctors</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Doctors
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Doctor</th>
                                            <th>Id</th>
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
                                    <?php foreach( $doctors as $doctor ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive '))); ?></td>
                                            <td><?php echo e($doctor->name); ?></td>
                                            <td><?php echo e('D-'.$doctor->id); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($doctor->mobile); ?>"> <?php echo e($doctor->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($doctor->email); ?></td>
                                            <td><?php echo e($doctor->account_no); ?></td>
                                            <td><?php echo e($doctor->bank_name); ?></td>
                                            <td><?php echo e($doctor->branch_name); ?></td>

                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'doctor.show', array( 'id'=> $doctor->id ) )); ?>">Show</a>


                                                <a class="label label-warning" href="<?php echo e(route( 'doctor.edit', array( 'id'=> $doctor->id ) )); ?>">Edit</a>

                                            
                                                
                                                <?php echo Form::open( array( 'route' => array('doctor.destroy', $doctor->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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