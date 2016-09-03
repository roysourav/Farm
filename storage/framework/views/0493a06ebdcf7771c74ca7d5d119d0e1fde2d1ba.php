<?php $__env->startSection('content'); ?>

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Employees</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
        <a href="<?php echo e(route('employee.create')); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
        <a href="<?php echo e(route('employee.list.pdf')); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
        
            
        </div>
        
    </div>
</div>
    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Employee
                        </div>

                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Working Since</th>
                                            <th>Monthly Salary TK.</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $employees as $employee ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($employee->img, $employee->name, array('class' => 'img-responsive '))); ?></td>
                                            <td><?php echo e('E-'.$employee->id); ?></td>
                                            <td><?php echo e($employee->name); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->date_of_birth) )->format('%y Y'); ?></td>
                                            <td><?php echo e($employee->designation); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($employee->mobile); ?>"> <?php echo e($employee->mobile); ?></a>
                                            </td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->appointment_date) )->format('%y Y, %m M'); ?></td>
                                            <td><?php echo e($employee->monthly_salary); ?></td>

                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'employee.show', array( 'id'=> $employee->id ) )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                            <a class="label label-warning" href="<?php echo e(route( 'employee.edit', array( 'id'=> $employee->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                            
                                                
                                                <?php echo Form::open( array( 'route' => array('employee.destroy', $employee->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('X Delete', array( 'class' => '' ) ); ?>

                                              
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


<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>