<?php $__env->startSection('content'); ?>
 
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Update Employee: <?php echo e($employee->name); ?></h1>
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
                        <?php echo Form::model( $employee, array( 'method'=>'put', 'route'=> array( 'employee.update', $employee->id ),'id'=>'form','files'=>true ) ); ?>

                            
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ); ?>


                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Designation *</label>
                                
                                <div class="col-sm-9">

                                    <?php echo Form::text( 'designation', null, array( 'class'=>'form-control','placeholder'=>'Enter Designation', 'required'=> '') ); ?>


                               </div>
                                            
                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-9">
                                    <?php echo e(Html::image($employee->img, null, array('id' => 'preview-container','class' => 'img-responsive img-thumbnail'))); ?>

                                    <?php echo Form::file('img', ['id' =>'imgInp'] ); ?>


                                </div>

                            </div>

                             <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Birth *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_birth', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Qualification *</label>

                                <div class="col-sm-9">

                                <?php echo e(Form::select('qualification',

                                [

                                 'Literate' => 'Literate',
                                 '8Th' => '8Th Std.',
                                 '10Th' => '10Th Std.',
                                 '12Th' => '12Th Std.',
                                 'Graduate' => 'Graduate',
                                 'Post Graduate' => 'Post Graduate',

                                 ],
                                 $employee->qualification, ['class' => 'form-control select','required'=>''] )); ?>


                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Skill *</label>

                                <div class="col-sm-9">

                               <?php echo e(Form::select('skill[]',
                               
                                [
                                    'Milking'   => 'Milking',
                                    'Injection' => 'Injection',
                                    'Saline Pushing' => 'Saline Pushing',
                                    'Delivery Maintenance' => 'Delivery Maintenance',
                                    'Others'    => 'Others',
                                ],

                                $skills, 

                                 ['class' =>'form-control select_multi', 'multiple' => 'multiple', 'required'=> '' ] )); ?> 
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Father's Name *</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-male" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'father_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Father\'s Name', 'required'=> '','minlength'=>'3' ) ); ?> 

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Mother's Name *</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-female" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'mother_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Mother\'s Name', 'required'=> '','minlength'=>'3') ); ?>

                                        
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">NID *</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-barcode" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'nid', null, array( 'class'=>'form-control','placeholder'=>'Enter Enter NID','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[10, 16]','data-parsley-length-message'=>'This value should be between 10 to 16 characters long'  ) ); ?> 
                                
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Mobile *</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-mobile" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'mobile', null, array( 'class'=>'form-control','placeholder'=>'Enter Mobile No.','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ); ?> 
                                            
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Emergency Mobile </label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'e_mobile', null, array( 'class'=>'form-control','placeholder'=>'Contact Mobile In Case Of Any Emergency','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ); ?> 
                                            
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Email</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'email', null, array( 'class'=>'form-control','placeholder'=>'Enter Email Id','data-parsley-type'=>'email' ) ); ?>

               
                                    </div>
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Present Address *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Present Address','rows'=>'3','required'=> '','minlength'=>'10' ) ); ?>

                                
                                </div> 

                            </div> 

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Permanent Address </label>

                                <div class="col-sm-9">

                                    <?php echo Form::textarea( 'p_address', null, array( 'class'=>'form-control','placeholder'=>'Enter Permanent Address','rows'=>'3','minlength'=>'5' ) ); ?>

                                
                                </div> 

                            </div>  

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Reference (If Any)</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'reference', null, array( 'class'=>'form-control','placeholder'=>'Reference If Any','minlength'=>'3' ) ); ?> 

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Disability (If Any)</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        </div>
                                    <?php echo Form::text( 'disability', null, array( 'class'=>'form-control','placeholder'=>'Disability If Any','minlength'=>'3' ) ); ?> 

                                    </div>
                                </div>

                            </div>

                            <div class="fix"></div>
                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Appointment *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'appointment_date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>
                            
                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Monthly Salary *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        <?php echo Form::text( 'monthly_salary', null, array( 'class'=>'form-control','placeholder'=>'Enter Monthly Salary','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name In Bank Account *</label>

                                    <div class="col-sm-9">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>      
                                        <?php echo Form::text( 'account_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name As It Appears In Bank Account.','required'=> '','minlength'=>'3'  ) ); ?> 
                                            
                                        </div>
                                    </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Bank Account No. *</label>

                                    <div class="col-sm-9">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                            </div>     
                                        <?php echo Form::text( 'account_no', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Account No.','required'=> '','data-parsley-type'=>'number'  ) ); ?> 
                                            
                                        </div>
                                    </div>

                            </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Bank *</label>

                                            <div class="col-sm-9">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                       <i class="fa fa-university" aria-hidden="true"></i>
                                                    </div>
                                                <?php echo Form::text( 'bank_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name Of Bank', 'required'=> '' ) ); ?>


                                                </div>
                                            </div>

                                        </div>
                                        
                                        <div class="form-group m_bottom_30">

                                            <label class="col-sm-3 control-label">Name Of Branch *</label>

                                            <div class="col-sm-9">
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                       <i class="fa fa-building-o" aria-hidden="true"></i>
                                                    </div>
                                                <?php echo Form::text( 'branch_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Branch Name', 'required'=> '' ) ); ?>


                                                </div>
                                            </div>

                                        </div>

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('employee.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                   
                                    <?php echo Form::submit( '&#10004; Update Employee', array( 'class'=>'btn btn-warning' ) ); ?>

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
                                <p><?php echo Carbon\Carbon::parse($employee->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($employee->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('employee.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    <a href="<?php echo e(route( 'employee.show', array( 'id'=> $employee->id ) )); ?>" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
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