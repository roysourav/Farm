<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Customers (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Customer</th>
                                            <th>Mobile</th>
                                            <th>Additional Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $customers as $customer ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e('CUST-'.$customer->id); ?></td>
                                            <td><?php echo e($customer->name); ?></td>
                                            <td><?php echo e($customer->mobile); ?></td>
                                            
                                            <td>
                                            <?php if($customer->a_mobile): ?>
                                            <?php echo e($customer->a_mobile); ?>

                                            <?php else: ?>
                                            N/A
                                            <?php endif; ?>
                                            </td>

                                            <td>
                                            <?php if($customer->email): ?>
                                             <?php echo e($customer->email); ?>

                                            <?php else: ?> 
                                            N/A
                                            <?php endif; ?>
                                            </td>

                                            <td><?php echo e($customer->account_no); ?></td>
                                            <td><?php echo e($customer->bank_name); ?></td>
                                            <td><?php echo e($customer->branch_name); ?></td>
                                        </tr>

                                    <?php endforeach; ?>  
                                       
                                    </tbody>
                                </table>

                            </div>
                           
                        </div>
                        
                    </div>            
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('PdfViews.pdfMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>