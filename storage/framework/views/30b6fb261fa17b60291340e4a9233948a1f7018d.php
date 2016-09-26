<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Medicines (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?> )</h3>
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
                                            <th>Name Of Medicine</th>
                                            <th> Id</th>
                                            <th>Category</th>
                                            <th>Cost(Per Unit)TK.</th>
                                            <th>Stock(Unit)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $medicines as $medicine ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e($medicine->name); ?></td>
                                            <td><?php echo e('M-'.$medicine->id); ?></td>
                                            <td><?php echo e($medicine->category->name); ?></td>
                                            <td><?php echo e($medicine->cost); ?></td>
                                            <td><?php echo e($medicine->stock); ?></td>
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