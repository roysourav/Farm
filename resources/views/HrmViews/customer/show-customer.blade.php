@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header">
    <h1>Customer : {{ $customer->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-heading">
                                    <h4> Details Of Customer : {{ $customer->name }}</h4>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image ">
                                {{ Html::image($customer->img, $customer->name, array('class' => 'img-responsive img-thumbnail')) }}
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                    
                                        <tr>
                                            <td>Name Of Customer :</td>
                                            <td>{{ $customer->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Customer ID :</td>
                                            <td>{{ 'CUST-'.$customer->id }}</td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Mobile No. :</td>
                                            <td><a title=""  href="tel:{{ $customer->mobile }}"> {{ $customer->mobile }}</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Additional Mobile No. :</td>
                                            <td>
                                            @if($customer->a_mobile)
                                            <a title=""  href="tel:{{ $customer->a_mobile }}"> {{ $customer->a_mobile }}</a>
                                            @else
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                            @if($customer->email)
                                             {{ $customer->email }}
                                            @else 
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Address :</td>
                                            <td>{{ $customer->address }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td>{{ $customer->account_name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No. :</td>
                                            <td>{{ $customer->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Additional Bank Account No. :</td>
                                            <td>
                                            @if($customer->a_account_no)
                                             {{ $customer->a_account_no }}
                                            @else 
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $customer->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $customer->branch_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            @if($customer->agreement)
                                             {{ $customer->agreement }}
                                            @else 
                                            N/A
                                            @endif
                                            </td>
                                            
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
                                <p>{!! Carbon\Carbon::parse($customer->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($customer->updated_at)->format('jS M Y , h:i A') !!}</p>
                                
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('customer.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    <a href="{{ route( 'customer.edit', array( 'id'=> $customer->id ) ) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                    <a href="{{ route('show.customer.pdf', ['id' => $customer->id]) }}" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    </div>

@stop