@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Cow</h1>
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
                        {!! Form::open( array( 'route'=>'cow.store', 'id'=>'form', 'files'=> true ) ) !!}


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

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Species *</label>

                                <div class="col-sm-9">
                                
                                    <select name="species_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($species as $spec)
                                            <option value="{{$spec->id}}">{{ $spec->name }}</option>
                                        @endforeach
                                    </select>

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

                                    <select name="supplier_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        @foreach($suppliers as $supplier)
                                            <option value="{{$supplier->id}}">{{ $supplier->name }}</option>
                                        @endforeach
                                    </select>


                                </div>

                            </div>


                           <div class="form-group">

                                <label class="col-sm-3 control-label">Milking Channels *</label>

                                <div class="col-sm-9">
                              
                                {!! Form::select('milking_channels',[
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'],'4',['class' => 'form-control','required'=> '']

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
                                    <a href="{{ route('cow.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp Go Back</a>
                                                        
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Reset All Fields</button>

                                        {!! Form::submit( '&#10004; Create New Cow', array( 'class'=>'btn btn-success', 'i class'=>'fa fa-check', 'aria-hidden'=>'true' ) ) !!}
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