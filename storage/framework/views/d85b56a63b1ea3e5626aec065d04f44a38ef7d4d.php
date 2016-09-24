<?php $__env->startSection('content'); ?>

<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>All Cows</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="<?php echo e(route('cow.create')); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
                <a href="<?php echo e(route('cow.list.pdf')); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
            </div>        
        </div>
    </div>    
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
                                            <th>percentage</th>
                                            <th>price(Tk.)</th>
                                            <th>Active</th>
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
                                            <td><?php echo e($cow->percentage); ?> %</td>
                                            <td><?php echo e($cow->price); ?></td>
                                            <td><?php echo Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_purchase) )->format('%y Y, %m M '); ?></td>


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