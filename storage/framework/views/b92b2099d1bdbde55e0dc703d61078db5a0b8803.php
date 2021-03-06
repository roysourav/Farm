<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>Customer : <?php echo e($customer->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-heading">
                                    <h4> Details Of Customer : <?php echo e($customer->name); ?></h4>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image ">
                                <?php echo e(Html::image($customer->img, $customer->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Customer :</td>
                                            <td><?php echo e($customer->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Customer ID :</td>
                                            <td><?php echo e('CUST-'.$customer->id); ?></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Mobile No. :</td>
                                            <td><a title=""  href="tel:<?php echo e($customer->mobile); ?>"> <?php echo e($customer->mobile); ?></a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Additional Mobile No. :</td>
                                            <td>
                                            <?php if($customer->a_mobile): ?>
                                            <a title=""  href="tel:<?php echo e($customer->a_mobile); ?>"> <?php echo e($customer->a_mobile); ?></a>
                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                            <?php if($customer->email): ?>
                                             <?php echo e($customer->email); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Address :</td>
                                            <td><?php echo e($customer->address); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($customer->account_name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No. :</td>
                                            <td><?php echo e($customer->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Additional Bank Account No. :</td>
                                            <td>
                                            <?php if($customer->a_account_no): ?>
                                             <?php echo e($customer->a_account_no); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($customer->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($customer->branch_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            <?php if($customer->agreement): ?>
                                             <?php echo e($customer->agreement); ?>

                                            <?php else: ?> 
                                            N/A
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
                                <p><?php echo Carbon\Carbon::parse($customer->created_at)->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($customer->updated_at)->format('jS M Y , h:i A'); ?></p>
                                
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('customer.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    <a href="<?php echo e(route( 'customer.edit', array( 'id'=> $customer->id ) )); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                    <a href="<?php echo e(route('show.customer.pdf', ['id' => $customer->id])); ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>