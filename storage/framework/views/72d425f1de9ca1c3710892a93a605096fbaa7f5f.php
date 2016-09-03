<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Employee - <?php echo e($employee->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>
                            
                           
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
                                            <td>Date of Birth :</td>
                                            <td><?php echo Carbon\Carbon::parse( $employee->date_of_birth )->format('jS M Y '); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Age :</td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->date_of_birth) )->format('%y Years, %m Months'); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</td>
                                            
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
                                            <td>Emergency Mobile No :</td>
                                            <td>
                                            <?php if($employee->e_mobile): ?>
                                            <a title=""  href="tel:<?php echo e($employee->e_mobile); ?>"> <?php echo e($employee->e_mobile); ?></a>
                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                            <?php if($employee->email): ?>
                                             <?php echo e($employee->email); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Address :</td>
                                            <td><?php echo e($employee->address); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Permanent Address :</td>
                                            <td>
                                            <?php if($employee->p_address): ?>
                                            <?php echo e($employee->p_address); ?>

                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification :</td>
                                            <td><?php echo e($employee->qualification); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Skills :</td>
                                            <td>
                                            <?php if(isset($skills)): ?>
                                            <?php foreach( $skills as $skill): ?>
                                                <?php echo e($skill); ?> ,
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Date Of Appointment :</td>
                                            <td><?php echo e(Carbon\Carbon::parse($employee->appointment_date)->format('jS M Y ')); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Working For :</td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->appointment_date) )->format('%y Y, %m M'); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Reference :</td>
                                            <td>
                                            <?php if($employee->reference): ?>
                                            <?php echo e($employee->reference); ?>

                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Disability :</td>
                                            <td>
                                            <?php if($employee->disability): ?>
                                            <?php echo e($employee->disability); ?>

                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        

                                        <tr>
                                            <td>Monthly Salary :</td>
                                            <td>TK <?php echo e($employee->monthly_salary); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($employee->account_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($employee->account_no); ?></td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Name Of Bank :</td>
                                            <td><?php echo e($employee->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td><?php echo e($employee->branch_name); ?></td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('PdfViews.pdfMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>