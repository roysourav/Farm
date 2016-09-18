<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Sold Cow - <?php echo e($sold_cow->cow->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow :</td>
                                            <td><?php echo e($sold_cow->cow->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td><?php echo e('C-'.$sold_cow->cow->id); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td><?php echo e($sold_cow->cow->sex); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td><?php echo e($sold_cow->cow->color); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            <?php if($sold_cow->cow->significant_sign): ?>
                                            <?php echo e($sold_cow->cow->significant_sign); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td><?php echo Carbon\Carbon::parse($sold_cow->cow->date_of_birth)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased On :</td>
                                            <td><?php echo Carbon\Carbon::parse($sold_cow->cow->date_of_purchase)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased Value (TK.) :</td>
                                            <td><?php echo e($sold_cow->cow->price); ?> Tk.</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sell Value (TK.) :</td>
                                            <td><?php echo e($sold_cow->price); ?> Tk.</td>
                                            
                                        </tr>


                                         <tr>
                                            <td>Sold On :</td>
                                            
                                            <td><?php echo Carbon\Carbon::parse($sold_cow->date )->format('jS M Y '); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Age When Sold :</td>
                                            <td><?php echo Carbon\Carbon::parse($sold_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Year, %m Month  %d Days'); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Active In Farm For :</td>
                                            <td><?php echo Carbon\Carbon::parse($sold_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Year, %m Month %d Days'); ?></td>
                                            
                                        </tr>

                                       
                                         <tr>
                                            <td>Reason Of Sell :</td>
                                            
                                            <td>
                                             <?php echo e($sold_cow->reason); ?>

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