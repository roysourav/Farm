<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Reproduction Details Of : <?php echo e($reproduction->cow->name); ?></h1>
</section>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">  
                            <div class="panel-heading">
                                Reproduction Details Of Cow : <?php echo e($reproduction->cow->name); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="image ">
                            <?php echo e(Html::image($reproduction->cow->img, $reproduction->cow->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                            </div>

                        </div>
                    </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Date Of A.I. :</td>
                                            <td><?php echo Carbon\Carbon::parse( $reproduction->date_of_ai )->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>percentage Of Seed (bull) :</td>
                                            <td><?php echo e($reproduction->percentage); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Seed Supplier :</td>
                                            <td><?php echo e($reproduction->supplier->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor :</td>
                                            <td><?php echo e($reproduction->doctor->name); ?></td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Date Of Check :</td>
                                            <td><?php echo Carbon\Carbon::parse( $reproduction->date_of_check )->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Pregnancy Confirm :</td>
                                            <td><?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e('Yes'); ?>

                                            <?php else: ?>
                                            <?php echo e('No'); ?>

                                            <?php endif; ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Confirm By (Doctor) :</td>
                                            <td><?php echo e($reproduction->preg_confirm_doctor->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Delivery Date (Expected):</td>
                                            <td><?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(283)->format('jS M Y ')); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?></td>
                                            
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
                        <p><?php echo Carbon\Carbon::parse($reproduction->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($reproduction->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('reproduction.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                        <a href="<?php echo e(route( 'reproduction.edit', array( 'id'=> $reproduction->id ) )); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>