<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Supplier : <?php echo e($supplier->name); ?></h1>
</section>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Supplier : <?php echo e($supplier->name); ?>

                        </div>
                        <div class="image ">
                            <?php echo e(Html::image($supplier->img, $supplier->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                            </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Supplier :</td>
                                            <td><?php echo e($supplier->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Category :</td>
                                            <?php if( $supplier->cat == 'cow' ): ?>
                                            <td><?php echo e('Cow Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'food' ): ?>
                                            <td><?php echo e('Food Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'medicine' ): ?>
                                            <td><?php echo e('Medicine Supplier'); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e('Seed Supplier'); ?></td>
                                            <?php endif; ?>
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:<?php echo e($supplier->mobile); ?>"> <?php echo e($supplier->mobile); ?></a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td><a title=""  href="tel:<?php echo e($supplier->additional_mobile_one); ?>"> <?php echo $supplier->additional_mobile_one?$supplier->additional_mobile_one:'N/A'; ?></a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td><a title=""  href="tel:<?php echo e($supplier->additional_mobile_two); ?>"> <?php echo $supplier->additional_mobile_two?$supplier->additional_mobile_two:'N/A'; ?></a></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td><?php echo e($supplier->email); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($supplier->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($supplier->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($supplier->branch_name); ?></td>
                                            
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
                        <p><?php echo Carbon\Carbon::parse($supplier->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($supplier->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('supplier.index')); ?>" class="btn btn-primary">Go Back</a>
                        <a href="<?php echo e(route( 'supplier.edit', array( 'id'=> $supplier->id ) )); ?>" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>