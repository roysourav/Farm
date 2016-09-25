<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Vaccines (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?> )</h3>
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
                                            <th>Vaccine ID</th>
                                            <th>Name Of Vaccine</th>
                                            <th>Next Dose( Months )</th>
                                            <th>Cost (Tk. Per Unit )</th>
                                            <th>Stock ( In Unit )</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $vaccines as $vaccine ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td>VC-<?php echo e($vaccine->id); ?></td>
                                            <td><?php echo e($vaccine->name); ?></td>
                                            <td><?php echo e($vaccine->duration); ?></td>
                                            <td><?php echo e($vaccine->cost); ?></td>
                                            <td><?php echo e($vaccine->stock); ?></td>
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