<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Medicine Category</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
       
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header">
                    Milk Entry | Date : <?php echo e(Carbon\Carbon::parse($milk->date)->format('jS M Y ')); ?>

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
                                         <?php echo Form::model( $milk, array( 'method'=>'put', 'route'=> array( 'milk.update', $milk->id ),'id'=>'form' ) ); ?>

                                        <tr>
                                            <td>
                                                Cow : <?php echo e($milk->cow->name); ?> ( C-<?php echo e($milk->cow->id); ?> )
                                            </td>

                                                <?php echo e(Form::hidden('date', $milk->date, ['required'=> ''] )); ?>


                                            <td><?php echo e(Form::selectRange( 'morning',0,15,$milk->morning,['required'=> ''] )); ?></td>

                                            <td><?php echo e(Form::selectRange( 'evening',0,15,$milk->evening,['required'=> ''] )); ?></td>

                                           <td><?php echo Form::submit( 'Update', array( 'class'=>'label label-warning' ) ); ?></td>

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