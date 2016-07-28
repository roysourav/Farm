@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Food</h1>
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
                        {!! Form::open( array( 'route'=>'medicine.store', 'id'=>'form' ) ) !!}


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Food *</label>

                                <div class="col-sm-9">
                                
                                    <select name="food_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($foods as $food)
                                            <option value="{{$food->id}}">{{ $food->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Month *</label>

                                <div class="col-sm-9">
                                
                                    <select required="" class="form-control" name="month">
                                        <option selected="Please Select" value="">Please Select</option>
                                        <option value="1">January </option>
                                        <option value="9">February </option>
                                        <option value="15">March </option>
                                        <option value="20">April </option>
                                        <option value="20">May </option>
                                        <option value="20">June</option>
                                        <option value="20">July</option>
                                        <option value="20">August</option>
                                        <option value="20">September</option>
                                        <option value="20">October</option>
                                        <option value="20">November</option>
                                        <option value="20">December</option>
                                    </select>
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Opening Balance(Kg.)*</label>

                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Kg:</span>
                                        
                                        {!! Form::text( 'balance', null, array( 'class'=>'form-control','placeholder'=>'Enter Balance In Kg.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Stock (Kg.)*</label>

                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Kg:</span>
                                        
                                        {!! Form::text( 'stock', null, array( 'class'=>'form-control','placeholder'=>'Enter New Stock In Kg.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>

                            </div>


                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Cost Per Kg *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        {!! Form::text( 'cost', null, array( 'class'=>'form-control','placeholder'=>'Enter Cost Per Kg.','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Consump.(Per Day/Per Cow)*</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Kg:</span>
                                        
                                        {!! Form::text( 'cost', null, array( 'class'=>'form-control','placeholder'=>'Enter Consumption(Per Day/Per Cow).','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Wastage (If Any)</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Kg:</span>
                                        
                                        {!! Form::text( 'wastage', null, array( 'class'=>'form-control','placeholder'=>'Enter Wastage(If Any).','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Adjustment (If Any)</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Kg:</span>
                                        
                                        {!! Form::text( 'adjustment', null, array( 'class'=>'form-control','placeholder'=>'Enter Adjustment(If Any).','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>


                            
                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('consumption.index') }}" class="btn btn-primary">Go Back</a>
                                            
                                        {!! Form::submit( 'Add New Food', array( 'class'=>'btn btn-success' ) ) !!}
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