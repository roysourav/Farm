@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Medicine</h1>
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

                                <label class="col-sm-3 control-label">Name Of Medicine *</label>

                                <div class="col-sm-9">

                                    {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Medicine Name', 'required'=> '' ) ) !!}

                                </div>

                            </div>

                            
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Medicine Category *</label>

                                <div class="col-sm-9">
                                
                                    <select name="cat_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($medicine_categories as $category)
                                            <option value="{{$category->id}}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>

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
                                <label class="col-sm-3 control-label">Stock(In Unit) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        
                                        
                                        {!! Form::text( 'stock', null, array( 'class'=>'form-control','placeholder'=>'Enter stock in unit','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                        <span class="input-group-addon">Unit</span>

                                    </div>

                                </div>
                            </div>

                            
                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('medicine.index') }}" class="btn btn-primary">Go Back</a>
                                            
                                        {!! Form::submit( 'Add New Medicine', array( 'class'=>'btn btn-success' ) ) !!}
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