<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Utility Bill</h1>
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

                                            <label class="col-sm-3 control-label">Utility *</label>

                                            <div class="col-sm-9">
                                
                                                <select name="utility_id" class="form-control select" required="">
                                                    <option  value="" selected="Please Select">Please Select</option>
                                                    <?php foreach( $utilities as $utility ): ?>
                                                        <option value="<?php echo e($utility->id); ?>"><?php echo e($utility->name); ?></option>
                                                    <?php endforeach; ?>
                                                </select>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Bill Year *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::select('year', [
                                                   '2016'  => '2016',
                                                   '2017'  => '2017',
                                                   '2018'  => '2018',
                                                   '2019'  => '2019',
                                                   '2020'  => '2020',
                                                   '2021'  => '2021',
                                                   '2022'  => '2022',
                                                   ],null,
                                                   ['class'=>'form-control select','required'=> '']
                                                ); ?>


                                            </div>

                                        </div>


                                        
                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-9">
                                            <div class="buttons">
                                                <a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>

                                                <?php echo Form::submit( '&#10004; Create New Vaccine', array( 'class'=>'btn btn-success' ) ); ?>

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
<?php echo $__env->make('AccountViews.AccountMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>