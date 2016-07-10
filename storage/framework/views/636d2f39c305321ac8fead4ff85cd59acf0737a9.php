<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Dead Cow : <?php echo e($dead_cow->cow->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                Details Of Dead Cow - <?php echo e($dead_cow->cow->name); ?> 
            </div>
                         
            <div class="image ">
                <?php echo e(Html::image($dead_cow->cow->img, $dead_cow->cow->name, array('class' => 'img-responsive img-thumbnail'))); ?>

            </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow :</td>
                                            <td><?php echo e($dead_cow->cow->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td><?php echo e('C-'.$dead_cow->cow->id); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td><?php echo e($dead_cow->cow->sex); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td><?php echo e($dead_cow->cow->color); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            <?php if($dead_cow->cow->significant_sign): ?>
                                            <?php echo e($dead_cow->cow->significant_sign); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased On :</td>
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased Value (TK.) :</td>
                                            <td><?php echo e($dead_cow->cow->price); ?> Tk.</td>
                                            
                                        </tr>


                                         <tr>
                                            <td>Died On :</td>
                                            
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->date )->format('jS M Y '); ?></td>
                                        </tr>

                                        <tr>
                                            <td>Age When Died :</td>
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Year, %m Month  %d Days'); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Active In Farm For :</td>
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Year, %m Month %d Days'); ?></td>
                                            
                                        </tr>

                                       
                                         <tr>
                                            <td>Reason Of Death :</td>
                                            
                                            <td>
                                             <?php echo e($dead_cow->reason); ?>

                                            </td>
                                            
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
                    <p><?php echo Carbon\Carbon::parse($dead_cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                    <p><?php echo Carbon\Carbon::parse($dead_cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                </div>

                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('dead-cow.index')); ?>" class="btn btn-primary">Go Back</a>
                        <a href="<?php echo e(route( 'dead-cow.edit', array( 'id'=> $dead_cow->id ) )); ?>" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>