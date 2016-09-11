@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Supplier - {{ $supplier->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>                                   
                                        <tr>
                                            <td>Name Of Supplier :</td>
                                            <td>{{ $supplier->name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Category :</td>
                                            @if( $supplier->cat == 'cow' )
                                            <td>{{ 'Cow Supplier' }}</td>
                                            @elseif( $supplier->cat == 'food' )
                                            <td>{{ 'Food Supplier' }}</td>
                                            @elseif( $supplier->cat == 'medicine' )
                                            <td>{{ 'Medicine Supplier' }}</td>
                                            @else( $supplier->cat == 'seed' )
                                            <td>{{ 'Seed Supplier' }}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td>{{ $supplier->mobile }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td> {!! $supplier->additional_mobile_one?$supplier->additional_mobile_one:'N/A' !!}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td>{!! $supplier->additional_mobile_two?$supplier->additional_mobile_two:'N/A' !!}</td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                                @if($supplier->email)
                                                {{ $supplier->email }}
                                                @else 
                                                N/A
                                                @endif
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Address :</td>
                                            <td>{{ $supplier->address }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Name On Bank Account :</td>
                                            <td>{{ $supplier->account_name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $supplier->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $supplier->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $supplier->branch_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Agreement :</td>
                                            <td>
                                            @if($supplier->agreement)
                                             {{ $supplier->agreement }}
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

