@extends('MilkViews.MilkMaster')
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
                        {!! Form::model( $distribution, array( 'method'=>'put', 'route'=> array( 'distribution.update', $distribution->id ),'id'=>'form' ) ) !!}

                             <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Customer *</label>

                                            <div class="col-sm-9">

                                                <select name="customer_id" class="form-control" required="">
                                                    <option  value="" selected="Please Select">Please Select</option>
                                                    @foreach( $customers as $customer )
                                                        <option value="{{$customer->id}}">{{ $customer->name }}</option>
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

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Price Per Ltr. *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <span class="input-group-addon">Tk:</span>
                                                    
                                                    {!! Form::text( 'price', null, array( 'class'=>'form-control','placeholder'=>'Enter Price Per Ltr.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">.00</span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Morning (In Ltr.) *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    {!! Form::text( 'morning', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                                         <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Evening (In Ltr.) *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    {!! Form::text( 'evening', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Waste ( If Any ) </label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    {!! Form::text( 'waste', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                           

                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('distribution.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    
                                    {!! Form::submit( 'Update Record', array( 'class'=>'btn btn-warning' ) ) !!}
                                </div> 
                                        
                           </div>
                           
                            
                        {!! Form::close() !!}
                    </div>
                    
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Log Information
                            </div>
                             <div class="panel-body">
                                <h5>Created At:</h5>
                                <p>{!! Carbon\Carbon::parse($distribution->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($distribution->updated_at)->format('jS M Y , h:i A') !!}</p>
                                
                                
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