<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Milk Details Of All Cows</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="<?php echo e(route('milk.index')); ?>" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>           
            </div>        
        </div>
    </div>    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            Last 60 Days Record )
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Name Of Cow</th>
                                            <th>Action</th>         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 0;?> 
                                         <?php foreach( $cows as $cow ): ?>
                                            <?php $count++  ?>
                                            <tr>
                                                <td><?php echo e($count); ?></td>

                                                <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($cow->img, $cow->name, array('class' => 'img-responsive '))); ?></td>

                                                <td><?php echo e('C-'.$cow->id); ?></td>
                                                <td><?php echo e($cow->name); ?></td>
                                                
                                                <td><a class="label label-success" href="<?php echo e(route('cow.milk.details', ['id'=>$cow->id] )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Details</a></td>
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