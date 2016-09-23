<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Medicine : <?php echo e($medicine->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Cow Id</th>
                                            <th>Cow Name</th>                                            
                                            <th>Dose/Day</th>
                                            <th>Duration( Days )</th>
                                            <th>Date</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           <?php foreach( $medicine->cows as $cow ): ?>
                                            <tr>
                                               
                                                <?php $count++  ?>
                                                <td><?php echo e($count); ?></td>
                                                <td>C-<?php echo e($cow->id); ?> </td>
                                                <td><?php echo e($cow->name); ?></td>
                                                <td><?php echo e($cow->pivot->dose); ?> </td>
                                                <td><?php echo e($cow->pivot->days); ?> </td>
                                                <td><?php echo e(Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ')); ?> </td>

                                            </tr>
                                        <?php endforeach; ?>                                                                         
                                    </tbody>
                                </table>              
                            </div>                       
                        </div>                   
                    </div>           
        </div>
        
    </div>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('PdfViews.pdfMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>