<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>Milk Record (60 Days As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?> )</h3>
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
                                    <?php $count = 0;?>

                                    <?php foreach( $milks as $milk ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e(Carbon\Carbon::parse($milk->date)->format('jS M Y ')); ?></td>
                                            
                                            <td><?php echo e($milk->morning); ?></td>
                                            <td><?php echo e($milk->evening); ?></td>
                                            <td><?php echo e($milk->morning+$milk->evening); ?></td>
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