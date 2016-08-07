<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">All Customers</h3>
    </div>
                
</div> 

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Customers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Of Customer</th>
                                            <th> Id</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $customers as $customer ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e($customer->name); ?></td>
                                            <td><?php echo e('CUST-'.$customer->id); ?></td>
                                            <td>
                                            <a title=""  href="tel:<?php echo e($customer->mobile); ?>"> <?php echo e($customer->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($customer->email); ?></td>
                                            <td><?php echo e($customer->account_no); ?></td>
                                            <td><?php echo e($customer->bank_name); ?></td>
                                            <td><?php echo e($customer->branch_name); ?></td>

                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'customer.show', array( 'id'=> $customer->id ) )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                                <a class="label label-warning" href="<?php echo e(route( 'customer.edit', array( 'id'=> $customer->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                          
                                                
                                                <?php echo Form::open( array( 'route' => array('customer.destroy', $customer->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('X Delete', array( 'class' => '' ) ); ?>

                                              
                                                <?php echo Form::close(); ?>


                                            </td>

                                            
                                        </tr>

                                    <?php endforeach; ?>  
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>