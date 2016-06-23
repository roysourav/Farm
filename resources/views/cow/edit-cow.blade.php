@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Cow : {{ $cow->name }}</h1>
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
                        {!! Form::model( $cow, array( 'method'=>'put', 'route'=> array( 'cow.update', $cow->id ),'id'=>'form','files'=>true ) ) !!}

                               
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Sex *</label>
                                
                                <div class="col-sm-9">

                                {!! Form::select('sex', [
                                   'female' => 'Female',
                                   'male' => 'Male',
                                   ],'female',
                                   ['class'=>'form-control','required'=> '']
                                ) !!}

                               </div>
                                            
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Color *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'color', null, array( 'class'=>'form-control','placeholder'=>'Enter Color', 'required'=> '','minlength'=>'3' ) ) !!} 

                                </div>

                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-9">

                                    {!! Form::file('img') !!} 

                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Birth *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_birth', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Cow Percentage(Seed) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        {!! Form::text( 'percentage', null, array( 'class'=>'form-control','placeholder'=>'Enter Percentage','required'=> '','data-parsley-type'=>'number','data-parsley-range'=>'[0, 100]' ) ) !!}

                                        <span class="input-group-addon">%</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Weight (KG) *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'weight', null, array( 'class'=>'form-control','placeholder'=>'Enter Weight in KG', 'required'=> '','data-parsley-type'=>'number') ) !!}
                                        
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Significant Sign </label>

                                <div class="col-sm-9">
                                
                                    {!! Form::text( 'significant_sign', null, array( 'class'=>'form-control','placeholder'=>'Enter Significant Sign (If Any)',  ) ) !!} 
                                
                                </div>

                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Price *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        {!! Form::text( 'price', null, array( 'class'=>'form-control','placeholder'=>'Enter Price','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Purchase *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_purchase', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2','required'=> '') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Supplier *</label>

                                <div class="col-sm-9">
                                
                                   
                                    {!! Form::select('supplier_id',$suppliers,
                                    $cow->supplier->id,[ 'class' => 'form-control','required'=> '']

                                    ) !!}  
                                
                                </div>

                            </div>


                           <div class="form-group">

                                <label class="col-sm-3 control-label">Milking Channels </label>

                                <div class="col-sm-9">
                                
                                    

                                    {!! Form::select('milking_channels',[
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'],$cow->milking_channels,['class' => 'form-control','required'=> '']

                                    ) !!} 
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Milking</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_milking', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker3') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Dryness</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        {!! Form::text( 'date_of_dryness', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker4') ) !!}
                                        
                                    </div>

                                </div>

                            </div>

                           <div class="form-group m_bottom_30 ">

                                <label class="col-sm-3 control-label">Disease </label>

                                <div class="col-sm-9">
                                
                                    {!! Form::text( 'disease', null, array( 'class'=>'form-control','placeholder'=>'Enter disease (If Any)',  ) ) !!} 
                                
                                </div>

                            </div>         
 

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('cow.index') }}" class="btn btn-primary">Go Back</a>
                                   
                                    {!! Form::submit( 'Update Cow', array( 'class'=>'btn btn-warning' ) ) !!}
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
                                <p>{!! Carbon\Carbon::parse($cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('cow.index') }}" class="btn btn-primary">Go Back</a>
                                    <a href="{{ route( 'cow.show', array( 'id'=> $cow->id ) ) }}" class="btn btn-success">Show</a>
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