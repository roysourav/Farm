<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Employees (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Working </th>
                                            <th>Salary TK.</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $employees as $employee ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            
                                            <td><?php echo e('E-'.$employee->id); ?></td>
                                            <td><?php echo e($employee->name); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->date_of_birth) )->format('%y Y'); ?></td>
                                            <td><?php echo e($employee->designation); ?></td>
                                            <td><?php echo e($employee->mobile); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->appointment_date) )->format('%y Y, %m M'); ?></td>
                                            <td><?php echo e($employee->monthly_salary); ?></td>

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


<?php echo $__env->make('PdfViews.pdfMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>