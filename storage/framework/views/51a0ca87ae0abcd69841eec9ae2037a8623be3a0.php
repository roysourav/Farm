<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Cow : <?php echo e($cow->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4> Details Of Cow - <?php echo e($cow->name); ?> </h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="image">
                                <?php echo e(Html::image($cow->img, $cow->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                                </div>

                            </div>
                           
                        </div>
                        
                       <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow :</td>
                                            <td><?php echo e($cow->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td><?php echo e('C-'.$cow->id); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td><?php echo e($cow->sex); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td><?php echo e($cow->color); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Species :</td>
                                            <td><?php echo e($cow->species->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Cow Percentage(Seed) :</td>
                                            <td><?php echo e($cow->percentage); ?> %</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td><?php echo Carbon\Carbon::parse($cow->date_of_birth)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Age :</td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Years, %m Months ,%d Days'); ?></td>
                                            
                                        </tr>

                                          <tr>
                                            <td>Weight :</td>
                                            <td><?php echo e($cow->weight); ?> Kg</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            <?php if($cow->significant_sign): ?>
                                            <?php echo e($cow->significant_sign); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Price (TK.) :</td>
                                            <td><?php echo e($cow->price); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Purchase :</td>
                                            <td><?php echo Carbon\Carbon::parse($cow->date_of_purchase)->format('jS M Y '); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Supplier :</td>
                                            <td><?php echo e($cow->supplier->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Active Milk Channels :</td>
                                            <td><?php echo e($cow->milking_channels); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Milking :</td>

                                            <td>
                                             <?php if($cow->date_of_milking): ?>
                                            <?php echo Carbon\Carbon::parse($cow->date_of_milking)->format('jS M Y '); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Dryness :</td>
                                            
                                            <td>
                                             <?php if($cow->date_of_dryness): ?>
                                            <?php echo Carbon\Carbon::parse($cow->date_of_dryness)->format('jS M Y '); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Disease :</td>
                                            
                                            <td>
                                             <?php if($cow->disease): ?>
                                            <?php echo e($cow->disease); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
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
        <div class="col-lg-4">
            <div class="panel panel-primary m_top_25">
                <div class="panel-heading">
                    Log Information
                </div>
                <div class="panel-body">
                    <h5>Created At:</h5>
                        <p><?php echo Carbon\Carbon::parse($cow->created_at)->format('jS M Y , h:i A'); ?></p>
                                
                        <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($cow->updated_at)->format('jS M Y , h:i A'); ?></p>
               </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('cow.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                        <a href="<?php echo e(route( 'cow.edit', array( 'id'=> $cow->id ) )); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="<?php echo e(route( 'show.cow.pdf', ['id'=> $cow->id ] )); ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>