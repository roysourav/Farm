<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Milk Record Of Cow <?php echo e($cow->name); ?> Id C-<?php echo e($cow->id); ?>(Last 60 Records)</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="<?php echo e(route('milk.index')); ?>" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a> 
                <a href="<?php echo e(route('cow.milk.details.pdf', ['id' => $cow->id] )); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
                           
            </div>        
        </div>
    </div>    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                   Last 60 Days Milk Record Of Cow <?php echo e($cow->name); ?>(Id C-<?php echo e($cow->id); ?>)
                </div>
                        <!-- /.panel-heading -->
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
                            <!-- /.table-responsive -->
                </div>
                        <!-- /.panel-body -->
            </div>
                    <!-- /.panel -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('MilkViews.MilkMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>