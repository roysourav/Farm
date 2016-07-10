<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Cow Death Record : <?php echo e($dead_cow->cow->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">

                        <?php echo Form::model( $dead_cow, array( 'method'=>'put', 'route'=> array( 'dead-cow.update', $dead_cow->id ),'id'=>'form' ) ); ?>


                              <div class="form-group">

                                <label class="col-sm-3 control-label">Cow *</label>

                                <div class="col-sm-9">
                                
                                    <?php echo Form::select('cow_id',$cow,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>


                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Dead On *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker4','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">reason *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'reason', null, array( 'class'=>'form-control','placeholder'=>'max. 15 words', 'required'=> '','minlength'=>'3','maxlength'=>'15' ) ); ?>


                                </div>

                            </div>   
                            

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('dead-cow.index')); ?>" class="btn btn-primary">Go Back</a>
                                   
                                    <?php echo Form::submit( 'Update Record', array( 'class'=>'btn btn-warning' ) ); ?>

                                </div>
                                      
                            <?php echo Form::close(); ?>

                            </div>
                    </div>
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            Log Information
	                        </div>
		                     <div class="panel-body">
                                <h5>Created At:</h5>
                                <p><?php echo Carbon\Carbon::parse($dead_cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($dead_cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('dead-cow.index')); ?>" class="btn btn-primary">Go Back</a>
                                    <a href="<?php echo e(route( 'dead-cow.show', array( 'id'=> $dead_cow->id ) )); ?>" class="btn btn-success">Show</a>
                                </div>
                                
	                        </div>
                    	</div>
                    </div>
                                
                </div>
                            
            </div>
                        
        </div>
                    
    </div>
               
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>