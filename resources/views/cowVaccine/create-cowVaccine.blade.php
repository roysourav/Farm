@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add Vaccination Record</h1>
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
                        {!! Form::open( array( 'route'=>'cow-vaccine.store', 'id'=>'form' ) ) !!}

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Cow *</label>

                                <div class="col-sm-9">

                                    <select name="cow_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($cows as $cow)
                                            <option value="{{$cow->id}}">{{ $cow->name }} (C-{{ $cow->id }})</option>
                                        @endforeach
                                    </select> 
                                
                                </div>

                            </div>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Vaccine *</label>

                                <div class="col-sm-9">
                                
                                    <select name="vaccine_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($vaccines as $vaccine)
                                            <option value="{{$vaccine->id}}">{{ $vaccine->name }} </option>
                                        @endforeach
                                    </select>
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('cow-vaccine.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp Go Back</a>

                                    {!! Form::submit( '&#10004; Add New Record', array( 'class'=>'btn btn-success' ) ) !!}
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