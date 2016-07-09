@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Reproduction Record</h1>
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
                        {!! Form::open( array( 'route'=>'reproduction.store', 'id'=>'form' ) ) !!}

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Cow *</label>

                                <div class="col-sm-9">

                                    <select name="cow_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($cows as $cow)
                                            <option value="{{$cow->id}}">{{ $cow->name }} (C-{{ $cow->id }})</option>
                                        @endforeach
                                    </select> 
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of A.I. *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_ai', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Bull Percentage(Seed) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        {!! Form::text( 'percentage', null, array( 'class'=>'form-control','placeholder'=>'Enter Percentage','required'=> '','data-parsley-type'=>'number','data-parsley-range'=>'[0, 100]' ) ) !!}

                                        <span class="input-group-addon">%</span>

                                    </div>

                                </div>
                            </div>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Seed Supplier *</label>

                                <div class="col-sm-9">
                                
                                    <select name="supplier_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">{{ $supplier->name }} (S-{{ $supplier->id }})</option>
                                        @endforeach
                                    </select> 
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Doctor *</label>

                                <div class="col-sm-9">
                                
                                    <select name="doctor_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{ $doctor->name }} (D-{{ $doctor->id }})</option>
                                        @endforeach
                                    </select> 
                                
                                </div>

                            </div>


                             <div class="form-group ">

                                <label class="col-sm-3 control-label">Date of Check</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_check', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2') ) !!}
                                        
                                    </div>

                                </div>

                            </div>



                           <div class="form-group">

                                <label class="col-sm-3 control-label">Pregnancy Confirmation </label>

                                <div class="col-sm-9">
                              
                                {!! Form::select('pregnancy',[
                                    '0' => 'No',
                                    '1' => 'Yes',
                                     ],'0',['class' => 'form-control']

                                    ) !!}  
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Confirm by (Doctor) </label>

                                <div class="col-sm-9">
                                
                                    <select name="preg_confirm_doctor_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{ $doctor->name }} (D-{{ $doctor->id }})</option>
                                        @endforeach
                                    </select> 
                                
                                </div>

                            </div>

                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('reproduction.index') }}" class="btn btn-primary">Go Back</a>
                                                        
                                        <button type="reset" class="btn btn-danger">Reset All Fields</button>

                                        {!! Form::submit( 'Create New Record', array( 'class'=>'btn btn-success' ) ) !!}
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