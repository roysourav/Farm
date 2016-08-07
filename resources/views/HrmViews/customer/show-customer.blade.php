@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header">
    <h1>Customer : {{ $customer->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Customer : {{ $customer->name }}
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Customer :</td>
                                            <td>{{ $customer->name }}</td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:{{ $customer->mobile }}"> {{ $customer->mobile }}</a></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>{{ $customer->email }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $customer->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $customer->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $customer->branch_name }}</td>
                                            
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
                                <p>{!! Carbon\Carbon::parse($customer->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($customer->updated_at)->format('jS M Y , h:i A') !!}</p>
                                
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('customer.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    <a href="{{ route( 'customer.edit', array( 'id'=> $customer->id ) ) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    </div>

@stop