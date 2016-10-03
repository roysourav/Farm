<?php $__env->startSection('content'); ?>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>COW</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-area-chart"></i>
                </div>
                <a class="small-box-footer" href="<?php echo e(route('cow.index')); ?>">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>MILK</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-flask"></i>
                </div>
                <a class="small-box-footer" href="<?php echo e(route('milk.index')); ?>">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>HRM</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a class="small-box-footer" href="<?php echo e(route('employee.index')); ?>">
                 Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>ACCOUNTS</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-calculator"></i>
                </div>
                <a class="small-box-footer" href="<?php echo e(route('utility.index')); ?>">
                  Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>STOCK & CONS.</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-database"></i>
                </div>
                <a class="small-box-footer" href="<?php echo e(route('vaccine.index')); ?>">
                 Enter &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>REPORTS</h3>
                  <p>Module</p>
                </div>
                <div class="icon">
                  <i class="fa fa-book"></i>
                </div>
                <a class="small-box-footer" href="#">
                 Comming Soon &nbsp <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>