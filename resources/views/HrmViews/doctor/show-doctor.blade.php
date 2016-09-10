@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Doctor : {{ $doctor->name }}</h1>
</section>


@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-heading">
                                    <h4> Details Of Doctor : {{ $doctor->name }}</h4>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image ">
                                {{ Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive img-thumbnail')) }}
                                </div>
                            </div>
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
                                            <td>Doctor ID:</td>
                                            <td>{{ 'D-'.$doctor->id }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification:</td>
                                            <td>{{ $doctor->qualification }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Service Status:</td>
                                            <td>{{ $doctor->s_status }}</td>
                                            
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
                                            <td>Name On Bank Account :</td>
                                            <td>{{ $doctor->account_name }}</td>
                                            
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
        <div class="col-lg-4">
            <div class="panel panel-primary m_top_25">
                <div class="panel-heading">
                    Log Information
                </div>
                 <div class="panel-body">
                    <h5>Created At:</h5>
                        <p>{!! Carbon\Carbon::parse($doctor->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                    <h5>Last Updated At:</h5>
                        <p>{!! Carbon\Carbon::parse($doctor->updated_at)->format('jS M Y , h:i A') !!}</p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="{{ route('doctor.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                        <a href="{{ route( 'doctor.edit', array( 'id'=> $doctor->id ) ) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        <a href="{{ route('show.doctor.pdf', ['id' => $doctor->id]) }}" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

@stop