@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Customers (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Customer</th>
                                            <th>Mobile</th>
                                            <th>Additional Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $customers as $customer )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ 'CUST-'.$customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->mobile }}</td>
                                            
                                            <td>
                                            @if($customer->a_mobile)
                                            {{ $customer->a_mobile }}
                                            @else
                                            N/A
                                            @endif
                                            </td>

                                            <td>
                                            @if($customer->email)
                                             {{ $customer->email }}
                                            @else 
                                            N/A
                                            @endif
                                            </td>

                                            <td>{{ $customer->account_no }}</td>
                                            <td>{{ $customer->bank_name }}</td>
                                            <td>{{ $customer->branch_name }}</td>
                                        </tr>

                                    @endforeach  
                                       
                                    </tbody>
                                </table>

                            </div>
                           
                        </div>
                        
                    </div>            
        </div>
    </div>

@stop

