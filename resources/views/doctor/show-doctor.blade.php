@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Doctor : {{ $doctor->name }}</h1>
</section>


@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Doctor : {{ $doctor->name }}
                        </div>
                        <div class="image ">
                            {{ Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive img-thumbnail')) }}
                            </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Doctor :</td>
                                            <td>{{ $doctor->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:{{ $doctor->mobile }}"> {{ $doctor->mobile }}</a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Email :</td>
                                            <td>{{ $doctor->email }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $doctor->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $doctor->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $doctor->branch_name }}</td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                    
                                 
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
        <div class="col-lg-3">
            <div class="panel panel-primary m_top_25">
                <div class="panel-heading">
                    Log Information
                </div>
                 <div class="panel-body">
                    <h5>Created At:</h5>
                        <p>{!! Carbon\Carbon::parse($doctor->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                    <h5>Last Updated At:</h5>
                        <p>{!! Carbon\Carbon::parse($doctor->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="{{ route('doctor.index') }}" class="btn btn-primary">Go Back</a>
                        <a href="{{ route( 'doctor.edit', array( 'id'=> $doctor->id ) ) }}" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

@stop