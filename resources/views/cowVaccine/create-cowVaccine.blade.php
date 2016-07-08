@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add Vaccination Record</h1>
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
                        {!! Form::open( array( 'route'=>'cow-vaccine.store', 'id'=>'form' ) ) !!}

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Cow *</label>

                                <div class="col-sm-9">

                                    {!! Form::select('cow_id',$cows,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ) !!} 
                                
                                </div>

                            </div>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Vaccine *</label>

                                <div class="col-sm-9">
                                
                                    {!! Form::select('vaccine_id',$vaccines,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ) !!} 
                                
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


                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="{{ route('cow-vaccine.index') }}" class="btn btn-primary">Go Back</a>

                                    {!! Form::submit( 'Add New Record', array( 'class'=>'btn btn-success' ) ) !!}
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