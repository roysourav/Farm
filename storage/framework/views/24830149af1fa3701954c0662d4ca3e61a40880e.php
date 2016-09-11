<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Supplier - <?php echo e($supplier->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>                                   
                                        <tr>
                                            <td>Name Of Supplier :</td>
                                            <td><?php echo e($supplier->name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Category :</td>
                                            <?php if( $supplier->cat == 'cow' ): ?>
                                            <td><?php echo e('Cow Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'food' ): ?>
                                            <td><?php echo e('Food Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'medicine' ): ?>
                                            <td><?php echo e('Medicine Supplier'); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e('Seed Supplier'); ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><?php echo e($supplier->mobile); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td> <?php echo $supplier->additional_mobile_one?$supplier->additional_mobile_one:'N/A'; ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td><?php echo $supplier->additional_mobile_two?$supplier->additional_mobile_two:'N/A'; ?></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                                <?php if($supplier->email): ?>
                                                <?php echo e($supplier->email); ?>

                                                <?php else: ?> 
                                                N/A
                                                <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Address :</td>
                                            <td><?php echo e($supplier->address); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($supplier->account_name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($supplier->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($supplier->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($supplier->branch_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            <?php if($supplier->agreement): ?>
                                             <?php echo e($supplier->agreement); ?>

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