<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Doctor - <?php echo e($doctor->name); ?> (As On <?php echo e(Carbon\Carbon::today()->format('jS M Y ')); ?>)</h4>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                   <tbody>
                                    
                                        <tr>
                                            <td>Name Of Doctor :</td>
                                            <td><?php echo e($doctor->name); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor ID:</td>
                                            <td><?php echo e('D-'.$doctor->id); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification:</td>
                                            <td><?php echo e($doctor->qualification); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Service Status:</td>
                                            <td><?php echo e($doctor->s_status); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:<?php echo e($doctor->mobile); ?>"> <?php echo e($doctor->mobile); ?></a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Email :</td>
                                            <td><?php echo e($doctor->email); ?></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td><?php echo e($doctor->account_name); ?></td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Bank Account No :</td>
                                            <td><?php echo e($doctor->account_no); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> <?php echo e($doctor->bank_name); ?></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> <?php echo e($doctor->branch_name); ?></td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
<?php $__env->stopSection(); ?>


<?php echo $__env->make('PdfViews.pdfMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>