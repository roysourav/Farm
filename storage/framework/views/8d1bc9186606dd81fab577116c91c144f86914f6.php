<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Reproduction Details Of Cow: <?php echo e($reproduction->cow->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
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
                                            <td><?php echo e($reproduction->cow->name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Id :</td>
                                            <td>C-<?php echo e($reproduction->cow->id); ?></td>
                                            
                                        </tr>
                                    
                                        <tr>
                                            <td>Date Of A.I. :</td>
                                            <td><?php echo Carbon\Carbon::parse( $reproduction->date_of_ai )->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>percentage Of Seed (bull) :</td>
                                            <td><?php echo e($reproduction->percentage); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Seed Supplier :</td>
                                            <td><?php echo e($reproduction->supplier->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor :</td>
                                            <td><?php echo e($reproduction->doctor->name); ?></td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Date Of Check :</td>
                                            <td><?php echo Carbon\Carbon::parse( $reproduction->date_of_check )->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Pregnancy Confirm :</td>
                                            <td><?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e('Yes'); ?>

                                            <?php else: ?>
                                            <?php echo e('No'); ?>

                                            <?php endif; ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Confirm By (Doctor) :</td>
                                            <td><?php echo e($reproduction->preg_confirm_doctor->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Delivery Date (Expected):</td>
                                            <td><?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(283)->format('jS M Y ')); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?></td>
                                            
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