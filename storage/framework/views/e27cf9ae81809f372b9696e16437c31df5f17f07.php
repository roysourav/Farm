<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Suppliers (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
</section>
    <div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Supplier</th> 
                                            <th> Category</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $suppliers as $supplier ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e('S-'.$supplier->id); ?></td>
                                            <td><?php echo e($supplier->name); ?></td>
                                            
                                            <?php if( $supplier->cat == 'cow' ): ?>
                                            <td><?php echo e('Cow Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'food' ): ?>
                                            <td><?php echo e('Food Supplier'); ?></td>
                                            <?php elseif( $supplier->cat == 'medicine' ): ?>
                                            <td><?php echo e('Medicine Supplier'); ?></td>
                                            <?php else: ?>
                                            <td><?php echo e('Seed Supplier'); ?></td>
                                            <?php endif; ?>
                                            <td><?php echo e($supplier->mobile); ?></td>
                                            <td><?php echo e($supplier->email); ?></td>
                                            <td><?php echo e($supplier->account_no); ?></td>
                                            <td><?php echo e($supplier->bank_name); ?></td>
                                            <td><?php echo e($supplier->branch_name); ?></td> 
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