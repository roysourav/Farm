<?php $__env->startSection('content'); ?>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i aria-hidden="true" class="fa fa-male fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo e(count( $employees )); ?></div>
                        <div>Employees</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route( 'employee.index' )); ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
     <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i aria-hidden="true" class="fa fa-user fa-5x"></i>
                                    
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo e(count( $suppliers )); ?></div>
                        <div>Suppliers</div>
                     </div>
                </div>
            </div>
            <a href="<?php echo e(route( 'supplier.index' )); ?>">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>


                <div class="col-lg-3 col-md-6">
                   
                    
                </div>


                <div class="col-lg-3 col-md-6">
                    

                </div>


            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>