<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Cows</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Cows
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
                                            <th>Color</th>
                                            <th>Age</th>
                                            <th>Species</th>
                                            <th>Purchesed On</th>
                                            <th>Seller</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $cows as $cow ): ?>
										<?php $count++  ?>
                                        <tr>

                                            <td><?php echo e($count); ?></td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> <?php echo e(Html::image($cow->img, $cow->name, array('class' => 'img-responsive '))); ?></td>

                                            <td><?php echo e($cow->name); ?></td>

                                            <td><?php echo e('C-'.$cow->id); ?></td>

                                            <td><?php echo e($cow->color); ?></td>
                                            
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Y, %m M '); ?></td>

                                            <td><?php echo e($cow->species->name); ?></td>

                                           <td><?php echo e(Carbon\Carbon::parse($cow->date_of_purchase)->format('jS M Y ')); ?></td>
                                            
                                            <td><?php echo e($cow->supplier->name); ?></td>
                                             

                                            <td><a class="label label-success" href="<?php echo e(route( 'cow.show', array( 'id'=> $cow->id ) )); ?>"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                            <a class="label label-warning" href="<?php echo e(route( 'cow.edit', array( 'id'=> $cow->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</a>

                                         
                                                
                                                <?php echo Form::open( array( 'route' => array('cow.destroy', $cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


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