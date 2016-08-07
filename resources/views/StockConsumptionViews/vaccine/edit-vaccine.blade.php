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
                                                   '9' => '9 Months',
                                                   '12' => '12 Months',
                                                   '18' => '18 Months',
                                                   '24' => '24 Months',
                                                   ],$vaccine->duration,
                                                   ['class'=>'form-control','required'=> '']
                                                ) !!}

                                            </div>

                                        </div>

                                               <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Cost Per Unit *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <span class="input-group-addon">Tk:</span>
                                                    
                                                    {!! Form::text( 'cost', null, array( 'class'=>'form-control','placeholder'=>'Enter Cost Per Dose','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">.00</span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Add Stock (In Unit)</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    {!! Form::text( 'stock',0, array( 'class'=>'form-control','placeholder'=>'Enter Stock In Unit','data-parsley-type'=>'number','required'=> '' ) ) !!}

                                                    <span class="input-group-addon">Unit</span>


                                                </div>
                                                <p>( The stock you add above, will be added with existing stock, default is 0 )</p>

                                            </div>
                                        </div>

 

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                            <div class="buttons">
                                 <a href="{{ route('vaccine.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                
                                {!! Form::submit( '&#10004; Update Vaccine', array( 'class'=>'btn btn-warning' ) ) !!}
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
                                <p>{!! Carbon\Carbon::parse($vaccine->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($vaccine->updated_at)->format('jS M Y , h:i A') !!}</p>
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('vaccine.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    
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