<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Vaccines</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="tabbable">
    <ul id="myTab" class="nav nav-tabs ">
    <?php $i = 0; ?>
    <?php foreach( $vaccines as $vaccine ): ?>
    <?php $i++; ?>
        <li class="<?php echo e(( $i == 1 ) ? 'active' : ''); ?>">
            <a href="#<?php echo e($vaccine->name); ?>" data-toggle="tab">
                <?php echo e($vaccine->name); ?>

            </a>
        </li>
    <?php endforeach; ?>
    </ul>

    <div class="tab-content">
        <?php $i = 0; ?>

        <?php foreach( $vaccines as $vaccine ): ?>

         <?php $i++; ?>

        <div class="tab-pane <?php echo e(( $i == 1 ) ? 'in active' : ''); ?>" id="<?php echo e($vaccine->name); ?>">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-12">
                                   <b>Details Of Vaccine : <?php echo e($vaccine->name); ?></b>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Cow Name</th>
                                            <th>Cow Id</th>
                                            <th>Applied On</th>
                                            <th>Next Date</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           <?php foreach( $vaccine->cows as $cow ): ?>
                                        <tr>
                                           
                                            <?php $count++  ?>

                                             <td><?php echo e($count); ?></td>

                                            <td><?php echo e($cow->name); ?></td>

                                            <td>C-<?php echo e($cow->id); ?> </td>

                                            <td><?php echo e(Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ')); ?> </td>

                                            <td><?php echo e(Carbon\Carbon::parse($cow->pivot->date)->addMonths( $vaccine->duration )->format('jS M Y ')); ?> </td>

                                            

                                            <td>
                                                <a class="label label-danger" href="<?php echo e(url('vaccine/delete/'.$cow->id.'/'.$vaccine->id.'')); ?>">Delete</a>
                                            </td>
                                           
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
        </div>

        <?php endforeach; ?>

    </div>
</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>