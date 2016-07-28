@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Suppliers</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Suppliers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Supplier</th>
                                            <th> Id</th>
                                            <th> Category</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $suppliers as $supplier )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($supplier->img, $supplier->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ 'S-'.$supplier->id }}</td>
                                            @if( $supplier->cat == 'cow' )
                                            <td>{{ 'Cow Supplier' }}</td>
                                            @elseif( $supplier->cat == 'food' )
                                            <td>{{ 'Food Supplier' }}</td>
                                            @elseif( $supplier->cat == 'medicine' )
                                            <td>{{ 'Medicine Supplier' }}</td>
                                            @else( $supplier->cat == 'seed' )
                                            <td>{{ 'Seed Supplier' }}</td>
                                            @endif

                                            <td>
                                            <a title=""  href="tel:{{ $supplier->mobile }}"> {{ $supplier->mobile }}</a>
                                            </td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->account_no }}</td>
                                            <td>{{ $supplier->bank_name }}</td>
                                            <td>{{ $supplier->branch_name }}</td>

                                             

                                            <td><a class="label label-success" href="{{ route( 'supplier.show', array( 'id'=> $supplier->id ) ) }}">Show</a>

                                            <a class="label label-warning" href="{{ route( 'supplier.edit', array( 'id'=> $supplier->id ) ) }}">Edit</a>

                                          
                                                
                                                {!! Form::open( array( 'route' => array('supplier.destroy', $supplier->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete', array( 'class' => '' ) ) !!}
                                              
                                                {!! Form::close() !!}

                                            </td>

                                            
                                        </tr>

                                    @endforeach  
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
    </div>

@stop