<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>All Employees</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Employee
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>NAME</th>
                                            <th>ID</th>
                                            <th>DESIGNATION</th>
                                            <th>MOBILE</th>
                                            <th>DATE OF APPOINTMENT</th>
                                            <th>MONTHLY SALARY TK.</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $employees as $employee ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;"><?php echo e($count); ?></td>
                                            <td><?php echo e($employee->name); ?></td>
                                            <td><?php echo e('E-'.$employee->id); ?></td>
                                            <td><?php echo e($employee->designation); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($employee->mobile); ?>"> <?php echo e($employee->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($employee->appointment_date); ?></td>
                                            <td><?php echo e($employee->monthly_salary); ?></td>

                                             

                                            <td><a class="btn btn-success" href="<?php echo e(route( 'employee.show', array( 'id'=> $employee->id ) )); ?>">Show</a></td>


                                            <td><a class="btn btn-warning" href="<?php echo e(route( 'employee.edit', array( 'id'=> $employee->id ) )); ?>">Edit</a></td>

                                            <td>
                                                
                                                <?php echo Form::open( array( 'route' => array('employee.destroy', $employee->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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