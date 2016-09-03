@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Add New Employee</h1>
</section>

@include('partials._message')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        {!! Form::open( array( 'route'=>'employee.store', 'id'=>'form', 'files'=>true ) ) !!}


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Designation *</label>
                                
                                <div class="col-sm-9">

                                    {!! Form::text( 'designation', null, array( 'class'=>'form-control','placeholder'=>'Enter Designation', 'required'=> '') ) !!}

                               </div>
                                            
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-9">
                                    {{ Html::image('/images/avater.jpg', null, array('id' => 'preview-container','class' => 'img-responsive img-thumbnail')) }}
                                    {!! Form::file('img', ['id' =>'imgInp'] ) !!}

                                </div>

                            </div>

                           

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Birth *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_birth', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Qualification *</label>

                                <div class="col-sm-9">
                                
                                    <select name="qualification" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                          <option value="Literate">Literate</option>
                                          <option value="8Th">8Th Std.</option>
                                          <option value="10Th">10Th Std.</option>
                                          <option value="12Th">12Th Std.</option>
                                          <option value="Graduate">Graduate</option>
                                          <option value="Post Graduate">Post Graduate</option>
                                    </select> 
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Skill *</label>

                                <div class="col-sm-9">
                                
                                    <select name="skill[]" class="form-control select_multi" multiple="multiple" required="">
                                        
                                          <option value="Milking">Milking</option>
                                          <option value="Injection">Injection</option>
                                          <option value="Saline Pushing">Saline Pushing</option>
                                          <option value="Delivery Maintenance">Delivery Maintenance</option>
                                          <option value="Others">Others</option>
                                    </select> 
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Father's Name *</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-male" aria-hidden="true"></i>
                                        </div>

                                    {!! Form::text( 'father_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Father\'s Name', 'required'=> '','minlength'=>'3' ) ) !!} 

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

                                    {!! Form::text( 'mother_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Mother\'s Name', 'required'=> '','minlength'=>'3') ) !!}
                                        
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
								    {!! Form::text( 'nid', null, array( 'class'=>'form-control','placeholder'=>'Enter Enter NID','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[10, 16]','data-parsley-length-message'=>'This value should be between 10 to 16 characters long'  ) ) !!} 
                                
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
                                    {!! Form::text( 'mobile', null, array( 'class'=>'form-control','placeholder'=>'Enter Mobile No.','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ) !!} 
                                            
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
                                    {!! Form::text( 'e_mobile', null, array( 'class'=>'form-control','placeholder'=>'Contact Mobile In Case Of Any Emergency','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ) !!} 
                                            
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
                                    {!! Form::text( 'email', null, array( 'class'=>'form-control','placeholder'=>'Enter Email Id','data-parsley-type'=>'email' ) ) !!}
               
                                    </div>
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Present Address *</label>

                                <div class="col-sm-9">

                                    {!! Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Present Address','rows'=>'3','required'=> '','minlength'=>'10' ) ) !!}
                                
                                </div> 

                            </div> 

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Permanent Address </label>

                                <div class="col-sm-9">

                                    {!! Form::textarea( 'p_address', null, array( 'class'=>'form-control','placeholder'=>'Enter Permanent Address','rows'=>'3','minlength'=>'5' ) ) !!}
                                
                                </div> 

                            </div>  

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Reference (If Any)</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'reference', null, array( 'class'=>'form-control','placeholder'=>'Reference If Any','minlength'=>'3' ) ) !!} 

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Disability (If Any)</label>

                                <div class="col-sm-9">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-wheelchair" aria-hidden="true"></i>
                                        </div>
                                    {!! Form::text( 'disability', null, array( 'class'=>'form-control','placeholder'=>'Disability If Any','minlength'=>'3' ) ) !!} 

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
                                        
                                        {!! Form::text( 'appointment_date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>
                            
                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Monthly Salary *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
        								
        								{!! Form::text( 'monthly_salary', null, array( 'class'=>'form-control','placeholder'=>'Enter Monthly Salary','required'=> '','data-parsley-type'=>'number' ) ) !!}

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
                                        {!! Form::text( 'account_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name As It Appears In Bank Account.','required'=> '','minlength'=>'3'  ) ) !!} 
                                            
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
                                        {!! Form::text( 'account_no', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Account No.','required'=> '','data-parsley-type'=>'number'  ) ) !!} 
                                            
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
                                                    {!! Form::text( 'bank_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name Of Bank', 'required'=> '' ) ) !!}

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
                                                {!! Form::text( 'branch_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Branch Name', 'required'=> '' ) ) !!}

                                                </div>
                                            </div>

                                        </div>
                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9 ">
                                <div class="buttons">
                                    <a href="{{ route('employee.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp Go Back</a>
                                                        
                                        <button type="reset" class="btn btn-danger">X Reset All Fields</button>

                                        {!! Form::submit( '&#10004; Create New Employee', array( 'class'=>'btn btn-success' ) ) !!}
                                </div>
                                        

                               
                           </div>
                           
                            
                        {!! Form::close() !!}
                    </div>
                    
                                
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

		                        <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    All name fields can only content letters and must be minimum 3 characters.
                                </p>

                                <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    NID can only content number and must be unique and between 10 to 16 characters long.
                                </p>

                                <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    Mobile number  must be unique and exactly 11 characters long.
                                </p>
                                <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    Email must be unique.
                                </p>

                                <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    Address must be minimum 10 characters long.
                                </p>
                                <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    Monthly Salary can only content number.
                                </p>
		                    </div>
	                        <div class="panel-footer">
	                            Panel Footer
	                        </div>
                    	</div>
                    </div>
                                
                </div>
                            
            </div>
                        
        </div>
                    
        </div>
               
    </div>
</div>
@stop