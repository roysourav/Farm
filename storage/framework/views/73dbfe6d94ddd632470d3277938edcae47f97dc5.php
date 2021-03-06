<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Foods</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List Of All Foods
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name Of Food</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $foods as $food ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>

                                            
                                            <td><?php echo e($food->name); ?></td>
                                            


                                            <td><a class="label label-warning" href="<?php echo e(route( 'food.edit', array( 'id'=> $food->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Food</a>

                                           
                                                
                                                <?php echo Form::open( array( 'route' => array('food.destroy', $food->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('X Delete Food', array( 'class' => 'btn btn-danger' ) ); ?>

                                              
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
        <div class="col-lg-4">
            
             <div class="panel panel-default">
                            <div class="panel-heading">
                                Add New Food
                            </div>
                            <div class="panel-body">
                                 <?php echo Form::open( array( 'route'=>'food.store', 'id'=>'form' ) ); ?>

                                        <div class="input-group input-group-sm">

                                        <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Food Name', 'required'=> '' ) ); ?>


                                        <span class="input-group-btn">
                                         <?php echo Form::submit( '&#10004; Add New Food', array( 'class'=>'btn btn-success btn-flat' ) ); ?>

                                          
                                        </span>

                                      </div>
                                   <?php echo Form::close(); ?>

                                  
                            </div>
                            
                        </div>                       
                                
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('StockConsumptionViews.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>