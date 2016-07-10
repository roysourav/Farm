<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Cow Seller : <?php echo e($cowseller->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Cow Seller - <?php echo e($cowseller->name); ?> 
                        </div>
                         
                             <div class="image ">
                            
                            <?php echo e(Html::image($cowseller->img, $cowseller->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                           
                            </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow Seller:</td>
                                            <td><?php echo e($cowseller->name); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow Seller ID :</td>
                                            <td><?php echo e('CS-'.$cowseller->id); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:<?php echo e($cowseller->mobile); ?>"> <?php echo e($cowseller->mobile); ?></a></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td><?php echo e($cowseller->email); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($cowseller->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($cowseller->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($cowseller->branch_name); ?></td>
                                            
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
                                    <p><?php echo Carbon\Carbon::parse($cowseller->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                            
                                <h5>Last Updated At:</h5>
                                    <p><?php echo Carbon\Carbon::parse($cowseller->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('cowseller.index')); ?>" class="btn btn-primary">Go Back</a>
                                    <a href="<?php echo e(route( 'cowseller.edit', array( 'id'=> $cowseller->id ) )); ?>" class="btn btn-warning">Edit</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>