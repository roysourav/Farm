<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Doctor: <?php echo e($doctor->name); ?></h1>
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
                                    <?php echo Form::model( $doctor, array( 'method'=>'put', 'route'=> array( 'doctor.update', $doctor->id ),'id'=>'form','files'=>true ) ); ?>


                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Doctor *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ); ?>


                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Image</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::file('img'); ?> 

                                            </div>

                                        </div>

                                        
                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Mobile No. *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'mobile', null, array( 'class'=>'form-control','placeholder'=>'Enter Mobile No.','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ); ?> 
                                                        
                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Email *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'email', null, array( 'class'=>'form-control','placeholder'=>'Enter Email Id','data-parsley-type'=>'email','required'=> '' ) ); ?>

                           
                                            </div>

                                        </div>


                                        <div class="form-group ">

                                            <label class="col-sm-3 control-label">Address *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Address','rows'=>'3','required'=> '','minlength'=>'10' ) ); ?>

                                            
                                            </div> 

                                        </div> 
                                        <div class="fix"></div>
                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Bank Account No. *</label>

                                            <div class="col-sm-9">
                                            
                                                <?php echo Form::text( 'account_no', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Account No.','required'=> '','data-parsley-type'=>'number'  ) ); ?> 
                                            
                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Bank *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'bank_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Name', 'required'=> '' ) ); ?>


                                            </div>

                                        </div>
                                        
                                        <div class="form-group m_bottom_30">

                                            <label class="col-sm-3 control-label">Name Of Branch *</label>

                                            <div class="col-sm-9">

                                                <?php echo Form::text( 'branch_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Branch Name', 'required'=> '' ) ); ?>


                                            </div>

                                        </div>

                                        
                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-9">
                                            <div class="buttons">
                                                <a href="<?php echo e(route('doctor.index')); ?>" class="btn btn-primary">Go Back</a>
                                                 
                                                <?php echo Form::submit( 'Update Doctor', array( 'class'=>'btn btn-warning' ) ); ?>


                                            </div>
                                                
                                       
                                        </div>
                                        
                                        <?php echo Form::close(); ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Log Information
                                    </div>
                                    <div class="panel-body">
                                        <h5>Created At:</h5>
                                        <p><?php echo Carbon\Carbon::parse($doctor->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                        
                                        <h5>Last Updated At:</h5>
                                        <p><?php echo Carbon\Carbon::parse($doctor->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                        
                                    </div>
                                    <div class="panel-footer">
                                        <div class="buttons">
                                            <a href="<?php echo e(route('doctor.index')); ?>" class="btn btn-primary">Go Back</a>
                                            <a href="<?php echo e(route( 'doctor.show', array( 'id'=> $doctor->id ) )); ?>" class="btn btn-success">Show</a>
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
<?php echo $__env->make('HrmViews.HrmMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>