@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Reproduction Details Of : {{ $reproduction->cow->name }}</h1>
</section>


@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reproduction Details Of Cow : {{ $reproduction->cow->name  }}
                        </div>
                        <div class="image ">
                            {{ Html::image($reproduction->cow->img, $reproduction->cow->name, array('class' => 'img-responsive img-thumbnail')) }}
                            </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Date Of A.I. :</td>
                                            <td>{!! Carbon\Carbon::parse( $reproduction->date_of_ai )->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>percentage Of Seed (bull) :</td>
                                            <td>{{ $reproduction->percentage }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Seed Supplier :</td>
                                            <td>{{ $reproduction->supplier->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor :</td>
                                            <td>{{ $reproduction->doctor->name }}</td>
                                            
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
                        <p>{!! Carbon\Carbon::parse($reproduction->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                    <h5>Last Updated At:</h5>
                        <p>{!! Carbon\Carbon::parse($reproduction->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="{{ route('reproduction.index') }}" class="btn btn-primary">Go Back</a>
                        <a href="{{ route( 'reproduction.edit', array( 'id'=> $reproduction->id ) ) }}" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

@stop