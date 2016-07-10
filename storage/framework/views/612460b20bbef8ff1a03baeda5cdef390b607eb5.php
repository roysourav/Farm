<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Doctor : <?php echo e($doctor->name); ?></h1>
</section>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Doctor : <?php echo e($doctor->name); ?>

                        </div>
                        <div class="image ">
                            <?php echo e(Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                            </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Doctor :</td>
                                            <td><?php echo e($doctor->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:<?php echo e($doctor->mobile); ?>"> <?php echo e($doctor->mobile); ?></a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Email :</td>
                                            <td><?php echo e($doctor->email); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($doctor->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($doctor->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($doctor->branch_name); ?></td>
                                            
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
        <div class="col-lg-3">
            <div class="panel panel-primary m_top_25">
                <div class="panel-heading">
                    Log Information
                </div>
                 <div class="panel-body">
                    <h5>Created At:</h5>
                        <p><?php echo Carbon\Carbon::parse($doctor->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($doctor->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('doctor.index')); ?>" class="btn btn-primary">Go Back</a>
                        <a href="<?php echo e(route( 'doctor.edit', array( 'id'=> $doctor->id ) )); ?>" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>