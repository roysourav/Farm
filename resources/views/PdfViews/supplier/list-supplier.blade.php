@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Suppliers (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
</section>
    <div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Supplier</th> 
                                            <th> Category</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $suppliers as $supplier )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ 'S-'.$supplier->id }}</td>
                                            <td>{{ $supplier->name }}</td>
                                            
                                            @if( $supplier->cat == 'cow' )
                                            <td>{{ 'Cow Supplier' }}</td>
                                            @elseif( $supplier->cat == 'food' )
                                            <td>{{ 'Food Supplier' }}</td>
                                            @elseif( $supplier->cat == 'medicine' )
                                            <td>{{ 'Medicine Supplier' }}</td>
                                            @else( $supplier->cat == 'seed' )
                                            <td>{{ 'Seed Supplier' }}</td>
                                            @endif
                                            <td>{{ $supplier->mobile }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->account_no }}</td>
                                            <td>{{ $supplier->bank_name }}</td>
                                            <td>{{ $supplier->branch_name }}</td> 
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

