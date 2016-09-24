<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Milk Record (60 Days)</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="<?php echo e(route( 'milk.date.get' )); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
                <a href="<?php echo e(route( 'milk.list.pdf' )); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
            </div>        
        </div>
    </div>    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            Milk Record (60 Days)
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
                                            <th>View</th>
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
                                                <td><a class="label label-success" href="<?php echo e(route('milk.details', ['date'=>strtotime($milk->date) ] )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Details</a></td>
                                            </tr>
                                        <?php endforeach; ?>                                         
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