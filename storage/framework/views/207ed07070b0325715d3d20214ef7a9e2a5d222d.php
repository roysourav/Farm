<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Vaccine</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Record
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <?php echo Form::open( array( 'route'=>'vaccine.store','id'=>'form' ) ); ?>


                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Vaccine *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Vaccine Name', 'required'=> '','minlength'=>'3' ) ); ?>


                                            </div>

                                        </div>

                                       <div class="form-group">

                                            <label class="col-sm-3 control-label">Dose Duration *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::select('duration', [
                                                   '1'  => '1 Month',
                                                   '3'  => '3 Months',
                                                   '6'  => '6 Months',
                                                   '9' => '9 Months',
                                                   '12' => '12 Months',
                                                   '18' => '18 Months',
                                                   '24' => '24 Months',
                                                   ],null,
                                                   ['class'=>'form-control','required'=> '']
                                                ); ?>


                                            </div>

                                        </div>

                                        
                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-9">
                                            <div class="buttons">
                                                <a href="<?php echo e(route('vaccine.index')); ?>" class="btn btn-primary">Go Back</a>

                                                <?php echo Form::submit( 'Create New Vaccine', array( 'class'=>'btn btn-success' ) ); ?>

                                            </div>
                                           
                                        </div>
                                        
                                        <?php echo Form::close(); ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-3">
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Validation Rules
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            All * mark fields are required.
                                        </p>
 
                                    </div>
                                    <div class="panel-footer">
                                        Panel Footer
                                    </div>
                                    </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('StockConsumptionViews.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>