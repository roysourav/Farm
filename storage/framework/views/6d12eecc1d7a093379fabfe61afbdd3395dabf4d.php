<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">

    <h1>Milk Entry | Date : <?php echo e(Carbon\Carbon::parse($date)->format('jS M Y ')); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-6">
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
                                            <th>Cow Id</th>
                                            <th>Cow Name</th> 
                                            <th> Morning ( Ltr.)</th>
                                            <th> Evening ( Ltr.)</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $milks as $milk ): ?>
										<?php $count++  ?>
                                        <tr>

                                            <td><?php echo e($count); ?></td>
                                            
                                            <td><?php echo e($milk->cow->id); ?>  </td>
                                            <td><?php echo e($milk->cow->name); ?> </td>
                                            
                                            <td><?php echo e($milk->morning); ?></td>

                                            <td><?php echo e($milk->evening); ?></td>
                                            <td><a class="label label-warning" href="<?php echo e(route( 'milk.edit', array( 'id'=> $milk->id ) )); ?>">Edit</a>

                                                <?php echo Form::open( array( 'route' => array('milk.destroy', $milk->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => 'btn btn-danger' ) ); ?>

                                              
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
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header">
                    Milk Entry | Date : <?php echo e(Carbon\Carbon::parse($date)->format('jS M Y ')); ?>

                </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cow (Id )</th>
                                            
                                            <th> Morning ( Ltr.)</th>
                                            <th> Evening ( Ltr.)</th>
                                            <th> Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php echo Form::open( array( 'route'=>'milk.store', 'id'=>'form' ) ); ?>

                                        <tr>
                                            <td>
                                                <select name="cow_id" class="form-control" required="">
                                                <option  value="" selected="Please Select">Please Select</option>
                                                <?php foreach($cows as $cow): ?>
                                                    <option value="<?php echo e($cow->id); ?>"><?php echo e($cow->name); ?> ( C-<?php echo e($cow->id); ?>)</option>
                                                <?php endforeach; ?>
                                                </select>
                                            </td>

                                                <?php echo e(Form::hidden('date', $date, ['required'=> ''] )); ?>


                                            <td><?php echo e(Form::selectRange( 'morning',0,15,null,['required'=> ''] )); ?></td>

                                            <td><?php echo e(Form::selectRange( 'evening',0,15,null,['required'=> ''] )); ?></td>

                                           <td><?php echo Form::submit( 'Add', array( 'class'=>'label label-success' ) ); ?></td>

                                        </tr>
                                        <?php echo Form::close(); ?>


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>                     
                                
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('MilkViews.MilkMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>