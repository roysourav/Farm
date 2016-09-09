<?php $__env->startSection('content'); ?>

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Doctors</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
        <a href="<?php echo e(route('doctor.create')); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
        <a href="<?php echo e(route('doctor.list.pdf')); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
        
            
        </div>
        
    </div>
</div>
    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Doctors
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Name Of Doctor</th>
                                            <th>Qualification</th>
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
                                    <?php foreach( $doctors as $doctor ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>
                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive '))); ?></td>
                                            <td><?php echo e('D-'.$doctor->id); ?></td>
                                            <td><?php echo e($doctor->name); ?></td>
                                            <td><?php echo e($doctor->qualification); ?></td>
                                            
                                            <td>
                                            <a title=""  href="tel:<?php echo e($doctor->mobile); ?>"> <?php echo e($doctor->mobile); ?></a>
                                            </td>
                                            <td><?php echo e($doctor->email); ?></td>
                                            <td><?php echo e($doctor->account_no); ?></td>
                                            <td><?php echo e($doctor->bank_name); ?></td>
                                            <td><?php echo e($doctor->branch_name); ?></td>

                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'doctor.show', array( 'id'=> $doctor->id ) )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                                <a class="label label-warning" href="<?php echo e(route( 'doctor.edit', array( 'id'=> $doctor->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                            
                                                
                                                <?php echo Form::open( array( 'route' => array('doctor.destroy', $doctor->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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