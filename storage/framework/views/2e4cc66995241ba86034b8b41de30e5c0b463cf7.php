<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Medicine Category</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    Edit Medicine Category : <?php echo e($medicine_category->name); ?>

                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="row">
                                
                                <div class="col-md-6">
                                     <?php echo Form::model( $medicine_category, array( 'method'=>'put', 'route'=> array( 'medicine-category.update', $medicine_category->id ),'id'=>'form' ) ); ?>

                                        <div class="input-group input-group-sm">

                                        <?php echo Form::text( 'name', null, array( 'class'=>'form-control', 'required'=> '' ) ); ?>


                                        <span class="input-group-btn">
                                         <?php echo Form::submit( 'Edit Category', array( 'class'=>'btn btn-warning btn-flat' ) ); ?>

                                          
                                        </span>

                                      </div>
                                   <?php echo Form::close(); ?>

                                </div>

                                <div class="col-md-6">
                                    
                                        <div class="buttons">
                                            <a href="<?php echo e(route('medicine-category.index')); ?>" class="btn btn-primary">Go Back</a>
                                            
                                        </div>
                                        
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
        <div class="col-lg-3">
            
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>