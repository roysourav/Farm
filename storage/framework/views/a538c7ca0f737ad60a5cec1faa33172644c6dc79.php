<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Supplier : <?php echo e($supplier->name); ?></h1>
</section>


<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-6">
                               <div class="panel-heading">
                                <h4>Details Of Supplier : <?php echo e($supplier->name); ?></h4> 
                                </div> 

                            </div>
                            <div class="col-md-6">
                                <div class="image ">
                                <?php echo e(Html::image($supplier->img, $supplier->name, array('class' => 'img-responsive img-thumbnail'))); ?>

                                </div>

                            </div>
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
                                            <td>
                                                <?php if($supplier->email): ?>
                                                <?php echo e($supplier->email); ?>

                                                <?php else: ?> 
                                                N/A
                                                <?php endif; ?>
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Address :</td>
                                            <td><?php echo e($supplier->address); ?></td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($supplier->account_name); ?></td>
                                            
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
                                        <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            <?php if($supplier->agreement): ?>
                                             <?php echo e($supplier->agreement); ?>

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
                        <p><?php echo Carbon\Carbon::parse($supplier->created_at)->format('jS M Y , h:i A'); ?></p>
                                
                    <h5>Last Updated At:</h5>
                        <p><?php echo Carbon\Carbon::parse($supplier->updated_at)->format('jS M Y , h:i A'); ?></p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="<?php echo e(route('supplier.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                        <a href="<?php echo e(route( 'supplier.edit', array( 'id'=> $supplier->id ) )); ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="<?php echo e(route('show.supplier.pdf', [ 'id' => $supplier->id ] )); ?>" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>