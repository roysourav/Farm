@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Cow Death Record : {{ $dead_cow->cow->name }}</h1>
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

                        {!! Form::model( $dead_cow, array( 'method'=>'put', 'route'=> array( 'dead-cow.update', $dead_cow->id ),'id'=>'form' ) ) !!}

                              <div class="form-group">

                                <label class="col-sm-3 control-label">Cow *</label>

                                <div class="col-sm-9">
                                
                                    {!! Form::select('cow_id',$cow,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ) !!} 
                                
                                </div>

                            </div>


                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Dead On *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker4','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">reason *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'reason', null, array( 'class'=>'form-control','placeholder'=>'max. 15 words', 'required'=> '','minlength'=>'3','maxlength'=>'15' ) ) !!}

                                </div>

                            </div>   
                            

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('dead-cow.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                   
                                    {!! Form::submit( '&#10004; Update Record', array( 'class'=>'btn btn-warning' ) ) !!}
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
                                <p>{!! Carbon\Carbon::parse($dead_cow->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($dead_cow->updated_at)->format('jS M Y , h:i A') !!}</p>
                                
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('dead-cow.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    <a href="{{ route( 'dead-cow.show', array( 'id'=> $dead_cow->id ) ) }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>
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