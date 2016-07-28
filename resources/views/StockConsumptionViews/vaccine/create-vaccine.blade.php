@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Vaccine</h1>
</section>

@include('partials._message')
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Record
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    {!! Form::open( array( 'route'=>'vaccine.store','id'=>'form' ) ) !!}

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
                                                   '9'  => '9 Months',
                                                   '12' => '12 Months',
                                                   '18' => '18 Months',
                                                   '24' => '24 Months',
                                                   ],null,
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
                                            <label class="col-sm-3 control-label">Stock (In Unit) *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    {!! Form::text( 'stock', null, array( 'class'=>'form-control','placeholder'=>'Enter Stock In Unit','required'=> '','data-parsley-type'=>'number' ) ) !!}

                                                    <span class="input-group-addon">Unit</span>

                                                </div>

                                            </div>
                                        </div>

                                        
                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-9">
                                            <div class="buttons">
                                                <a href="{{ route('vaccine.index') }}" class="btn btn-primary">Go Back</a>

                                                {!! Form::submit( 'Create New Vaccine', array( 'class'=>'btn btn-success' ) ) !!}
                                            </div>
                                           
                                        </div>
                                        
                                        {!! Form::close() !!}
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
@stop