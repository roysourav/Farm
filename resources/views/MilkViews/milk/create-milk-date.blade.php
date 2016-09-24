@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Select Date For Milk Entry</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="{{ route('milk.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>            
            </div>        
        </div>
    </div>    
</section>

@include('partials._message')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                       <div class="panel panel-default">
                            
                            <div class="panel-body">
                                 {!! Form::open( array( 'route'=>'milk.date.store', 'id'=>'form' ) ) !!}
                                        <div class="input-group input-group-sm">

                                            <div class="form-group ">

                                                <label class="col-md-2 control-label">Select Date *</label>

                                                <div class="col-md-8">

                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        
                                                        {!! Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ) !!}
                                                        
                                                    </div>
                                                 

                                                </div>
                                                <div class="col-md-2">
                                                      
                                                 {!! Form::submit( 'Submit', array( 'class'=>'btn btn-success btn-flat' ) ) !!}
                                                  
                                                
                                                </div>

                                            </div>
                                        </div>
                                   {!! Form::close() !!}
                                  
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