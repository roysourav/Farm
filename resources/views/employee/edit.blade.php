@extends('main')

@section('content')
 
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Update Employee: {{ $employee->name }}</h1>
</section>

@include('partials._message')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        {!! Form::model( $employee, array( 'method'=>'put', 'route'=> array( 'employee.update', $employee->id ),'id'=>'form' ) ) !!}

                            <div class="form-group">

                                <label class="col-sm-3 control-label" >Name *</label>

                                <div class="col-sm-9">
                                {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Designation *</label>

                                <div class="col-sm-9">

                                {!! Form::text( 'designation', null, array( 'class'=>'form-control','placeholder'=>'Enter Designation', 'required'=> '' ) ) !!}

                                </div>   

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Father's Name *</label>

                                <div class="col-sm-9">

                                {!! Form::text( 'father_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Father\'s Name', 'required'=> '','minlength'=>'3' ) ) !!} 

                                </div>  

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Mother's Name *</label>

                                <div class="col-sm-9">

                                {!! Form::text( 'mother_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Mother\'s Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                 </div>
                                        
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">NID *</label>

                                <div class="col-sm-9">
								
								{!! Form::text( 'nid', null, array( 'class'=>'form-control','placeholder'=>'Enter Enter NID','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[13, 13]','data-parsley-length-message'=>'This value should be exactly 13 characters long' ) ) !!} 

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Mobile *</label>

                                <div class="col-sm-9">

                                {!! Form::text( 'mobile', null, array( 'class'=>'form-control','placeholder'=>'Enter Mobile No.','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[10, 10]','data-parsley-length-message'=>'This value should be exactly 10 characters long' ) ) !!} 

                                </div>
                                            
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Email</label>

                                <div class="col-sm-9">

                                {!! Form::text( 'email', null, array( 'class'=>'form-control','placeholder'=>'Enter Email Id','data-parsley-type'=>'email' ) ) !!}

                                </div>
               
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Address *</label>

                                <div class="col-sm-9">

                                {!! Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Address','rows'=>'3','required'=> '','minlength'=>'10' ) ) !!}

                                </div>
                                
                            </div>         
                            <div class="fix"></div>

                            <div class="form-group">

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

                                <div class="input-group">

                                    <span class="input-group-addon">Tk:</span>
    								
    								{!! Form::text( 'monthly_salary', null, array( 'class'=>'form-control','placeholder'=>'Enter Monthly Salary','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                    <span class="input-group-addon">.00</span>

                                </div>

                                </div>
                            </div>

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('employee.index') }}" class="btn btn-primary">Go Back</a>
                                   
                                    {!! Form::submit( 'Update Employee', array( 'class'=>'btn btn-warning' ) ) !!}
                                </div>
                            
                                        
                            {!! Form::close() !!}

                            </div>
                    </div>
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            Log Information
	                        </div>
		                    <div class="panel-body">
                                <h5>Created At:</h5>
                                <p>{!! Carbon\Carbon::parse($employee->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($employee->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('employee.index') }}" class="btn btn-primary">Go Back</a>
                                    <a href="{{ route( 'employee.show', array( 'id'=> $employee->id ) ) }}" class="btn btn-success">Show</a>
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