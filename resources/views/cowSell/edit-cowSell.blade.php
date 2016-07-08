@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Record Of Sold Cow : {{ $sell_cow->cow->name }}</h1>
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

                        {!! Form::model( $sell_cow, array( 'method'=>'put', 'route'=> array( 'sell-cow.update', $sell_cow->id ),'id'=>'form' ) ) !!}

                              <div class="form-group">

                                <label class="col-sm-3 control-label">Cow *</label>

                                <div class="col-sm-9">
                                
                                    {!! Form::select('cow_id',$cow,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ) !!} 
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Sold On *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker4','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Sell Price (Tk.) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        {!! Form::text( 'price', null, array( 'class'=>'form-control','placeholder'=>'Enter Sell Price','required'=> '','data-parsley-type'=>'number','minlength'=>'4','maxlength'=>'6' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>
                            

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('sell-cow.index') }}" class="btn btn-primary">Go Back</a>
                                   
                                    {!! Form::submit( 'Update Record', array( 'class'=>'btn btn-warning' ) ) !!}
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
                                <p>{!! Carbon\Carbon::parse($sell_cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($sell_cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('sell-cow.index') }}" class="btn btn-primary">Go Back</a>
                                    <a href="{{ route( 'sell-cow.show', array( 'id'=> $sell_cow->id ) ) }}" class="btn btn-success">Show</a>
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