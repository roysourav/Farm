<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>Reproductions Details (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
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
                                            <th>Cow Id</th>
                                            <th>Name Of Cow</th>
                                            <th>Date Of A.I.</th>
                                            <th>Doctor</th>
                                            <th>Date Of Check</th>
                                            <th>Pregnancy Confirmation</th>
                                            <th>Delivery Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $reproductions as $reproduction ): ?>
                                        <?php $count++  ?>
                                        <tr>

                                            <td><?php echo e($count); ?></td>

                                            <td><?php echo e('C-'.$reproduction->cow->id); ?></td>

                                            <td><?php echo e($reproduction->cow->name); ?></td>

                                           <td><?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->format('jS M Y ')); ?></td>
                                            
                                            <td><?php echo e($reproduction->doctor->name); ?></td>

                                            <td><?php echo e(Carbon\Carbon::parse($reproduction->date_of_check)->format('jS M Y ')); ?></td>

                                            <td>
                                            <?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e('Yes'); ?>

                                            <?php else: ?>
                                            <?php echo e('No'); ?>

                                            <?php endif; ?>
                                            </td>
                                             
                                            <td>
                                            <?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(278)->format('jS')); ?> To 
                                            <?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(288)->format('jS M Y ')); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                           
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