<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Employee : <?php echo e($employee->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of <?php echo e($employee->name); ?>

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name :</td>
                                            <td><?php echo e($employee->name); ?></td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Designation :</td>
                                            <td><?php echo e($employee->designation); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Father's Name :</td>
                                            <td><?php echo e($employee->father_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mother's Name :</td>
                                            <td><?php echo e($employee->mother_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>NID :</td>
                                            <td><?php echo e($employee->nid); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:<?php echo e($employee->mobile); ?>"> <?php echo e($employee->mobile); ?></a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Address :</td>
                                            <td><?php echo e($employee->address); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Date Of Appointment :</td>
                                            <td><?php echo e($employee->appointment_date); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Monthly Salary :</td>
                                            <td>TK <?php echo e($employee->monthly_salary); ?></td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                
                                  
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
        <div class="col-lg-3">
                        <div class="panel panel-primary m_top_25">
                            <div class="panel-heading">
                                Log Information
                            </div>
                            <div class="panel-body">
                                <h5>Created At:</h5>
                                <p><?php echo Carbon\Carbon::parse($employee->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($employee->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                               
                            </div>
                            <div class="panel-footer">
                            <div class="buttons">
                                 <a href="<?php echo e(route('employee.index')); ?>" class="btn btn-primary">Go Back</a>
                                <a href="<?php echo e(route( 'employee.edit', array( 'id'=> $employee->id ) )); ?>" class="btn btn-warning">Edit</a>
                            </div>
                               
                            </div>
                        </div>
                    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>