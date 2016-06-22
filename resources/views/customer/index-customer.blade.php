@extends('main')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">All Customers</h3>
    </div>
                
</div> 

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Customers
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Of Customer</th>
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
                                    @foreach( $customers as $customer )
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ 'CUST-'.$customer->id }}</td>
                                            <td>
                                            <a title=""  href="tel:{{ $customer->mobile }}"> {{ $customer->mobile }}</a>
                                            </td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->account_no }}</td>
                                            <td>{{ $customer->bank_name }}</td>
                                            <td>{{ $customer->branch_name }}</td>

                                             

                                            <td><a class="btn btn-success" href="{{ route( 'customer.show', array( 'id'=> $customer->id ) ) }}">Show</a></td>


                                            <td><a class="btn btn-primary" href="{{ route( 'customer.edit', array( 'id'=> $customer->id ) ) }}">Edit</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('customer.destroy', $customer->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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