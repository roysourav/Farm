<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Dead Cows (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
</section>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th> Id</th>
                                            <th>Name Of Cow</th>                                            
                                            <th>Purchased On</th>
                                            <th>Dead On</th>
                                            <th>Age when Dead</th>
                                            <th>Active For</th>
                                            <th>Reason Of Dead</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $dead_cows as $dead_cow ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e('C-'.$dead_cow->cow->id); ?></td>
                                            <td><?php echo e($dead_cow->cow->name); ?></td>

                                            <td><?php echo e(Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->format('jS M Y ')); ?></td>

                                            <td><?php echo e(Carbon\Carbon::parse($dead_cow->date)->format('jS M Y ')); ?></td>
                                            
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M '); ?></td>

                                           <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M '); ?></td>
                                            
                                            <td><?php echo e($dead_cow->reason); ?></td>
                                            
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