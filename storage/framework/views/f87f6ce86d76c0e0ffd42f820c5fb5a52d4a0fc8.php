<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h3>All Doctors (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h3>
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
                                            <th>Name Of Doctor</th>
                                            <th>Qualification</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    <?php foreach( $doctors as $doctor ): ?>
                                        <?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e('D-'.$doctor->id); ?></td>
                                            <td><?php echo e($doctor->name); ?></td>
                                            <td><?php echo e($doctor->qualification); ?></td>
                                            <td><?php echo e($doctor->mobile); ?></td>
                                            <td><?php echo e($doctor->email); ?></td>
                                            <td><?php echo e($doctor->account_no); ?></td>
                                            <td><?php echo e($doctor->bank_name); ?></td>
                                            <td><?php echo e($doctor->branch_name); ?></td>
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