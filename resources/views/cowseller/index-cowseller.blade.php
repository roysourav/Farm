@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Cow Sellers</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Cow Sellers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow Seller</th>
                                            <th> Id</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $cowsellers as $cowseller )
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>
                                            <td style="display: block;margin: 0 auto;width: 60px;"> {{ Html::image($cowseller->img, $cowseller->name, array('class' => 'img-responsive ')) }}</td>
                                            <td>{{ $cowseller->name }}</td>
                                            <td>{{ 'CS-'.$cowseller->id }}</td>
                                            <td>
                                            <a title=""  href="tel:{{ $cowseller->mobile }}"> {{ $cowseller->mobile }}</a>
                                            </td>
                                            <td>{{ $cowseller->email }}</td>
                                            <td>{{ $cowseller->account_no }}</td>
                                            <td>{{ $cowseller->bank_name }}</td>
                                            <td>{{ $cowseller->branch_name }}</td>

                                             

                                            <td><a class="btn btn-success" href="{{ route( 'cowseller.show', array( 'id'=> $cowseller->id ) ) }}">Show</a></td>


                                            <td><a class="btn btn-warning" href="{{ route( 'cowseller.edit', array( 'id'=> $cowseller->id ) ) }}">Edit</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('cowseller.destroy', $cowseller->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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