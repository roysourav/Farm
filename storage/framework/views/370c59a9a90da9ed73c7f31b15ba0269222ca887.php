<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Reproduction Record</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        <?php echo Form::model( $reproduction, array( 'method'=>'put', 'route'=> array( 'reproduction.update', $reproduction->id ),'id'=>'form','files'=>true ) ); ?>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Cow *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::select('cow_id',$cows,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of A.I. *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_ai', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>


                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Bull Percentage(Seed) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <?php echo Form::text( 'percentage', null, array( 'class'=>'form-control','placeholder'=>'Enter Percentage','required'=> '','data-parsley-type'=>'number','data-parsley-range'=>'[0, 100]' ) ); ?>


                                        <span class="input-group-addon">%</span>

                                    </div>

                                </div>
                            </div>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Seed Supplier *</label>

                                <div class="col-sm-9">
                                
                                    

                                    <?php echo Form::select('supplier_id',$suppliers,
                                    $reproduction->supplier_id,[ 'class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Doctor *</label>

                                <div class="col-sm-9">
                                
                                    

                                    <?php echo Form::select('doctor_id',$doctors,
                                    $reproduction->doctor_id,[ 'class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>


                             <div class="form-group ">

                                <label class="col-sm-3 control-label">Date of Check</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_check', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2') ); ?>

                                        
                                    </div>

                                </div>

                            </div>



                           <div class="form-group">

                                <label class="col-sm-3 control-label">Pregnancy Confirmation </label>

                                <div class="col-sm-9">
                              
                                <?php echo Form::select('pregnancy',[
                                    '0' => 'No',
                                    '1' => 'Yes',
                                     ],$reproduction->pregnancy,['class' => 'form-control']

                                    ); ?> 
                                
                                     
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Confirm by (Doctor) </label>

                                <div class="col-sm-9">
                                
                                    

                                    <?php echo Form::select('preg_confirm_doctor_id',$doctors,
                                    $reproduction->preg_confirm_doctor_id,[ 'class' => 'form-control']

                                    ); ?> 
                                
                                </div>

                            </div>

                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('reproduction.index')); ?>" class="btn btn-primary">Go Back</a>
                                    
                                    <?php echo Form::submit( 'Update Record', array( 'class'=>'btn btn-warning' ) ); ?>

                                </div> 
                                        
                           </div>
                           
                            
                        <?php echo Form::close(); ?>

                    </div>
                    
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Log Information
                            </div>
                             <div class="panel-body">
                                <h5>Created At:</h5>
                                <p><?php echo Carbon\Carbon::parse($reproduction->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($reproduction->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('reproduction.index')); ?>" class="btn btn-primary">Go Back</a>
                                    <a href="<?php echo e(route( 'reproduction.show', array( 'id'=> $reproduction->id ) )); ?>" class="btn btn-success">Show</a>
                                </div>
                                
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