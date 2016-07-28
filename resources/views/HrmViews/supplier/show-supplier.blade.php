@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Supplier : {{ $supplier->name }}</h1>
</section>


@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Supplier : {{ $supplier->name }}
                        </div>
                        <div class="image ">
                            {{ Html::image($supplier->img, $supplier->name, array('class' => 'img-responsive img-thumbnail')) }}
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
                                            <td><a title=""  href="tel:{{ $supplier->mobile }}"> {{ $supplier->mobile }}</a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td><a title=""  href="tel:{{ $supplier->additional_mobile_one }}"> {!! $supplier->additional_mobile_one?$supplier->additional_mobile_one:'N/A' !!}</a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Add. Mobile No. One:</td>
                                            <td><a title=""  href="tel:{{ $supplier->additional_mobile_two }}"> {!! $supplier->additional_mobile_two?$supplier->additional_mobile_two:'N/A' !!}</a></td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Email :</td>
                                            <td>{{ $supplier->email }}</td>
                                            
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
                        <p>{!! Carbon\Carbon::parse($supplier->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                    <h5>Last Updated At:</h5>
                        <p>{!! Carbon\Carbon::parse($supplier->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                </div>
                <div class="panel-footer">
                    <div class="buttons">
                        <a href="{{ route('supplier.index') }}" class="btn btn-primary">Go Back</a>
                        <a href="{{ route( 'supplier.edit', array( 'id'=> $supplier->id ) ) }}" class="btn btn-warning">Edit</a>
                    </div>
                                
                </div>
            </div>
        </div>
    </div>

@stop