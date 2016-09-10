@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Customers</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
        <a href="{{ route('customer.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
        <a href="{{ route('customer.list.pdf') }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
        
            
        </div>
        
    </div>
</div>
    
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Customers
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
                                            <th>Name Of Customer</th>
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
                                    @foreach( $customers as $customer )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($customer->img, $customer->name, array('class' => 'img-responsive ')) }}</td>
                                            <td>{{ 'CUST-'.$customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            
                                            <td>
                                            <a title=""  href="tel:{{ $customer->mobile }}"> {{ $customer->mobile }}</a>
                                            </td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->account_no }}</td>
                                            <td>{{ $customer->bank_name }}</td>
                                            <td>{{ $customer->branch_name }}</td>

                                             

                                            <td><a class="label label-success" href="{{ route( 'customer.show', array( 'id'=> $customer->id ) ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                                <a class="label label-warning" href="{{ route( 'customer.edit', array( 'id'=> $customer->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                          
                                                
                                                {!! Form::open( array( 'route' => array('customer.destroy', $customer->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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