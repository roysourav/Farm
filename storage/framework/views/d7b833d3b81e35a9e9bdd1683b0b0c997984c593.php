<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Dead Cows</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Dead Cows
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
                                            <th> Id</th>
                                            <th>Purchased On</th>
                                            <th>Dead On</th>
                                            <th>Age when Dead</th>
                                            <th>Active For</th>
                                            <th>Reason Of Dead</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $dead_cows as $dead_cow ): ?>
										<?php $count++  ?>
                                        <tr>

                                            <td><?php echo e($count); ?></td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($dead_cow->cow->img, $dead_cow->cow->name, array('class' => 'img-responsive '))); ?></td>

                                            <td><?php echo e($dead_cow->cow->name); ?></td>

                                            <td><?php echo e('C-'.$dead_cow->cow->id); ?></td>


                                            <td><?php echo e(Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->format('jS M Y ')); ?></td>

                                            <td><?php echo e(Carbon\Carbon::parse($dead_cow->date)->format('jS M Y ')); ?></td>

                                            
                                            <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M '); ?></td>

                                           <td><?php echo Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M '); ?></td>
                                            
                                            <td><?php echo e($dead_cow->reason); ?></td>
                                             
                                            <td><a class="label label-success" href="<?php echo e(route( 'dead-cow.show', array( 'id'=> $dead_cow->id ) )); ?>">Show</a>

                                            <a class="label label-warning" href="<?php echo e(route( 'dead-cow.edit', array( 'id'=> $dead_cow->id ) )); ?>">Edit</a>

                                            
                                                
                                                <?php echo Form::open( array( 'route' => array('dead-cow.destroy', $dead_cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => '' ) ); ?>

                                              
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