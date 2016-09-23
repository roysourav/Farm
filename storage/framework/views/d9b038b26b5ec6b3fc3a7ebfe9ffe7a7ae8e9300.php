<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Medicines</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
          <a href="<?php echo e(route('cow-medicine.create')); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New Record</a>
        </div>   
    </div>
</div>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="content">
            <div class="row">

                <?php foreach( $medicines as $medicine ): ?>

                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h4><?php echo e($medicine->name); ?></h4>
                            </div>
                           
                            <a href="<?php echo e(route( 'cow-medicine.show', ['id' => $medicine->id ] )); ?>" class="small-box-footer">
                              View Details &nbsp; <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>

                <?php endforeach; ?>

            </div>
        </div>
       
<?php $__env->stopSection(); ?>




<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>