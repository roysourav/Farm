<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Doctor : <?php echo e($doctor->name); ?></h1>
</section>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-heading">
                                    <h4> Details Of Doctor : <?php echo e($doctor->name); ?></h4>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image ">
                                <?php echo e(Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                                </div>
                            </div>
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
                                            <td>Doctor ID:</td>
                                            <td><?php echo e('D-'.$doctor->id); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification:</td>
                                            <td><?php echo e($doctor->qualification); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Service Status:</td>
                                            <td><?php echo e($doctor->s_status); ?></td>
                                            
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
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($doctor->account_name); ?></td>
                                            
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
        <div class="col-lg-4">
            <div class="panel panel-primary m_top_25">
                <div class="panel-heading">
                    Log Information
                </div>
                 <div class="panel-body">
                    <h5>Created At:</h5>
                        <p><?php echo Carbon\Carbon::parse($doctor->created_at)->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($doctor->updated_at)->format('jS M Y , h:i A'); ?></p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('doctor.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                        <a href="<?php echo e(route( 'doctor.edit', array( 'id'=> $doctor->id ) )); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="<?php echo e(route('doctor.show', ['id' => $doctor->id])); ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>