@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Suppliers</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <a href="{{ route('supplier.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
            <a href="{{ route('supplier.list.pdf') }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
        </div>
        
    </div>
</div>
    
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
                                            <th>Id</th>
                                            <th>Name Of Supplier</th>                                            
                                            <th> Category</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Account No.</th>
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

                                            <td>
                                            <a title=""  href="tel:{{ $supplier->mobile }}"> {{ $supplier->mobile }}</a>
                                            </td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->account_no }}</td>
                                            <td>{{ $supplier->bank_name }}</td>
                                            <td>{{ $supplier->branch_name }}</td>
                                            <td><a class="label label-success" href="{{ route( 'supplier.show', array( 'id'=> $supplier->id ) ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                            <a class="label label-warning" href="{{ route( 'supplier.edit', array( 'id'=> $supplier->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                               
                                                {!! Form::open( array( 'route' => array('supplier.destroy', $supplier->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete', array( 'class' => '' ) ) !!}
                                              
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