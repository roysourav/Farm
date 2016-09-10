@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Customer - {{ $customer->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>
                            
                           
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
                                            <td>Customer ID:</td>
                                            <td>{{ 'CUST-'.$customer->id }}</td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td> {{ $customer->mobile }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Additional Mobile No :</td>
                                            <td> 
                                            @if($customer->a_mobile)
                                            {{ $customer->a_mobile }}
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
                                            <td>Bank Account No :</td>
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
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
@stop

