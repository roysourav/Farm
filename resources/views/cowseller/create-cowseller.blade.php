@extends('main')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add New Cow Seller</h1>
    </div>
               
</div>

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
                                    {!! Form::open( array( 'route'=>'cowseller.store', 'id'=>'form', 'files'=> true) ) !!}

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Cow Seller *</label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ) !!}

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Image</label>

                                            <div class="col-sm-9">

                                                {!! Form::file('img') !!} 

                                            </div>

                                        </div>

                                        
                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Mobile No. *</label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'mobile', null, array( 'class'=>'form-control','placeholder'=>'Enter Mobile No.','required'=> '','data-parsley-type'=>'number','data-parsley-length'=>'[11, 11]','data-parsley-length-message'=>'This value should be exactly 11 characters long' ) ) !!} 
                                                        
                                            </div>

                                        </div>



                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Email </label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'email', null, array( 'class'=>'form-control','placeholder'=>'Enter Email Id','data-parsley-type'=>'email' ) ) !!}
                           
                                            </div>

                                        </div>


                                        <div class="form-group ">

                                            <label class="col-sm-3 control-label">Address *</label>

                                            <div class="col-sm-9">

                                                {!! Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Address','rows'=>'3','required'=> '','minlength'=>'10' ) ) !!}
                                            
                                            </div> 

                                        </div> 
                                        <div class="fix"></div>
                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Bank Account No.</label>

                                            <div class="col-sm-9">
                                            
                                                {!! Form::text( 'account_no', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Account No.','data-parsley-type'=>'number'  ) ) !!} 
                                            
                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Bank </label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'bank_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Bank Name', ) ) !!}

                                            </div>

                                        </div>
                                        
                                        <div class="form-group m_bottom_30">

                                            <label class="col-sm-3 control-label">Name Of Branch </label>

                                            <div class="col-sm-9">

                                                {!! Form::text( 'branch_name', null, array( 'class'=>'form-control','placeholder'=>'Enter Branch Name' ) ) !!}

                                            </div>

                                        </div>

                                        
                                        <div class="col-sm-3"></div>

                                        <div class="col-sm-9">
                                         
                                                <a href="{{ route('cowseller.index') }}" class="btn btn-primary">Go Back</a>
                                                                
                                                <button type="reset" class="btn btn-danger">Reset All Fields</button>

                                                {!! Form::submit( 'Create New Cow Seller', array( 'class'=>'btn btn-success' ) ) !!}

                                       
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

                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                             Name field can only content letters and must be minimum 3 characters.
                                        </p>

                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            Mobile number must be unique and exactly 11 characters long.
                                        </p>
                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            Email must be unique.
                                        </p>
                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            Bank Account number must be unique.
                                        </p>
                                        
                                        <p>
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                            Address must be minimum 10 characters long.
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