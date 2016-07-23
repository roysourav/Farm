@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Vaccine : {{ $vaccine->name }}</h1>
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
                        {!! Form::model( $vaccine, array( 'method'=>'put', 'route'=> array( 'vaccine.update', $vaccine->id ),'id'=>'form','files'=>true ) ) !!}

                                        
                                    <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Vaccine *</label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Vaccine Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                            </div>

                                        </div>

                                       <div class="form-group">

                                            <label class="col-sm-3 control-label">Dose Duration *</label>

                                            <div class="col-sm-9">

                                                {!! Form::select('duration', [
                                                   '1'  => '1 Month',
                                                   '3'  => '3 Months',
                                                   '6'  => '6 Months',
                                                   '9 ' => '9 Months',
                                                   '12' => '12 Months',
                                                   '18' => '18 Months',
                                                   '24' => '24 Months',
                                                   ],$vaccine->duration,
                                                   ['class'=>'form-control','required'=> '']
                                                ) !!}

                                            </div>

                                        </div>

 

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                            <div class="buttons">
                                 <a href="{{ route('vaccine.index') }}" class="btn btn-primary">Go Back</a>
                                
                                {!! Form::submit( 'Update Vaccine', array( 'class'=>'btn btn-warning' ) ) !!}
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
                                <p>{!! Carbon\Carbon::parse($vaccine->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($vaccine->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('vaccine.index') }}" class="btn btn-primary">Go Back</a>
                                    
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