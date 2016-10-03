<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3> Last 60 Days Milk Record Of Cow <?php echo e($cow->name); ?>(Id C-<?php echo e($cow->id); ?>) As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?></h3>
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
                                    <th>Date</th>
                                    <th>Morning(Ltr.)</th>
                                    <th>Evening(Ltr.)</th>
                                    <th>Total(Ltr.)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $count = 0;
                                $morning_total = 0;
                                $evening_total = 0;
                                ?>

                                <?php foreach( $milks as $milk ): ?>
                                    <?php 
                                    $count++;
                                    $morning_total += $milk->morning;
                                    $evening_total += $milk->evening;

                                     ?>
                                    <tr>
                                        <td><?php echo e($count); ?></td>
                                        <td><?php echo Carbon\Carbon::parse($milk->date)->format('jS M Y '); ?></td>
                                        <td><?php echo e($milk->morning); ?></td>
                                        <td><?php echo e($milk->evening); ?></td>
                                        <td><?php echo e($milk->morning+$milk->evening); ?></td>
                                    </tr>
                                <?php endforeach; ?> 
                                <tr>
                                    <td>Grand Total</td>
                                    <td></td>
                                    <td><?php echo e($morning_total); ?></td>
                                    <td><?php echo e($evening_total); ?></td>
                                    <td><?php echo e($morning_total + $evening_total); ?></td>
                                </tr>
                                <tr>
                                    <td>Avarage</td>
                                    <td></td>
                                    <td><?php echo e(round($morning_total/$count)); ?></td>
                                    <td><?php echo e(round($evening_total/$count)); ?></td>
                                    <td><?php echo e(round( ($morning_total + $evening_total)/$count )); ?></td>
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