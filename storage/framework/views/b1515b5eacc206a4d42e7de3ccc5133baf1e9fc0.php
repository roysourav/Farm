  

<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Medicine : <?php echo e($medicine->name); ?></h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="<?php echo e(route('cow-medicine.index')); ?>" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>

                <a href="<?php echo e(route( 'show.cow-medicine.pdf', ['id' => $medicine->id ] )); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>     
            </div>        
        </div>
    </div>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="row">
                <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-10">
                                   <b>Details Of Medicine : <?php echo e($medicine->name); ?></b>
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
                                            <th>Dose/Day</th>
                                            <th>Duration( Days )</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           <?php foreach( $medicine->cows as $cow ): ?>
                                            <tr>
                                               
                                                <?php $count++  ?>

                                                 <td><?php echo e($count); ?></td>

                                                <td><?php echo e($cow->name); ?></td>

                                                <td>C-<?php echo e($cow->id); ?> </td>

                                                <td><?php echo e($cow->pivot->dose); ?> </td>

                                                <td><?php echo e($cow->pivot->days); ?> </td>

                                                <td><?php echo e(Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ')); ?> </td>

                                                <td>

                                                    <a class="label label-danger" href="<?php echo e(url('medicine/delete/'.$cow->id.'/'.$medicine->id.'')); ?>"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>