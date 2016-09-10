<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Customer - <?php echo e($customer->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                   <tbody>
                                    
                                        <tr>
                                            <td>Name Of Customer :</td>
                                            <td><?php echo e($customer->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Customer ID:</td>
                                            <td><?php echo e('CUST-'.$customer->id); ?></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td> <?php echo e($customer->mobile); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Additional Mobile No :</td>
                                            <td> 
                                            <?php if($customer->a_mobile): ?>
                                            <?php echo e($customer->a_mobile); ?>

                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                            <?php if($customer->email): ?>
                                             <?php echo e($customer->email); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Address :</td>
                                            <td><?php echo e($customer->address); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($customer->account_name); ?></td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($customer->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                        <td>Additional Bank Account No. :</td>
                                            <td>
                                            <?php if($customer->a_account_no): ?>
                                             <?php echo e($customer->a_account_no); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($customer->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($customer->branch_name); ?></td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            <?php if($customer->agreement): ?>
                                             <?php echo e($customer->agreement); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
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