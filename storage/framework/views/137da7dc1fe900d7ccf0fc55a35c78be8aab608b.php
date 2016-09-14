<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Cows (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Cow</th>
                                            <th>Age</th>
                                            <th>Color</th>
                                            <th>Species</th>                                            
                                            <th>percentage</th>
                                            <th>price(Tk.)</th>
                                            <th>Active</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $cows as $cow ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e('C-'.$cow->id); ?></td>
                                            <td><?php echo e($cow->name); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Y, %m M '); ?></td>
                                              <td><?php echo e($cow->color); ?></td>
                                            <td><?php echo e($cow->species->name); ?></td>
                                            <td><?php echo e($cow->percentage); ?> %</td>
                                            <td><?php echo e($cow->price); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_purchase) )->format('%y Y, %m M '); ?></td> 
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