@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Cow Seller : {{ $cowseller->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Cow Seller - {{ $cowseller->name }} 
                        </div>
                         
                             <div class="image ">
                            
                            {{ Html::image($cowseller->img, $cowseller->name, array('class' => 'img-responsive img-thumbnail')) }}
                           
                            </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow Seller:</td>
                                            <td>{{ $cowseller->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow Seller ID :</td>
                                            <td>{{ 'CS-'.$cowseller->id }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:{{ $cowseller->mobile }}"> {{ $cowseller->mobile }}</a></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>{{ $cowseller->email }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $cowseller->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $cowseller->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $cowseller->branch_name }}</td>
                                            
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
                                    <p>{!! Carbon\Carbon::parse($cowseller->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                            
                                <h5>Last Updated At:</h5>
                                    <p>{!! Carbon\Carbon::parse($cowseller->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('cowseller.index') }}" class="btn btn-primary">Go Back</a>
                                    <a href="{{ route( 'cowseller.edit', array( 'id'=> $cowseller->id ) ) }}" class="btn btn-warning">Edit</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    </div>

@stop