<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Reproductions Details</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Cows ( Reproduction )
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow</th>
                                            <th>Cow Id</th>
                                            <th>Date Of A.I.</th>
                                            <th>Doctor</th>
                                            <th>Date Of Check</th>
                                            <th>Pregnancy Confirmation</th>
                                            <th>Delivery Date</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $reproductions as $reproduction ): ?>
										<?php $count++  ?>
                                        <tr>

                                            <td><?php echo e($count); ?></td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($reproduction->cow->img, $reproduction->cow->name, array('class' => 'img-responsive '))); ?></td>

                                            <td><?php echo e($reproduction->cow->name); ?></td>

                                            <td><?php echo e('C-'.$reproduction->cow->id); ?></td>

                                           <td><?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->format('jS M Y ')); ?></td>
                                            
                                            <td><?php echo e($reproduction->doctor->name); ?></td>

                                            <td><?php echo e(Carbon\Carbon::parse($reproduction->date_of_check)->format('jS M Y ')); ?></td>

                                            <td>
                                            <?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e('Yes'); ?>

                                            <?php else: ?>
                                            <?php echo e('No'); ?>

                                            <?php endif; ?>
                                            </td>
                                             
                                            <td>
                                            <?php if($reproduction->pregnancy > 0 ): ?>
                                            <?php echo e(Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(283)->format('jS M Y ')); ?>

                                            <?php else: ?>
                                            <?php echo e('N/A'); ?>

                                            <?php endif; ?>
                                            </td>

                                            <td><a class="label label-success" href="<?php echo e(route( 'reproduction.show', array( 'id'=> $reproduction->id ) )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                            <a class="label label-warning" href="<?php echo e(route( 'reproduction.edit', array( 'id'=> $reproduction->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                         
                                                
                                                <?php echo Form::open( array( 'route' => array('reproduction.destroy', $reproduction->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>