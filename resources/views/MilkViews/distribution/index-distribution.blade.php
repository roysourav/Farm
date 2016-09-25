@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>Distribution Record (Last 60 Days)</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <a href="{{ route('distribution.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
            <a href="{{ route('distribution.list.pdf') }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
        </div>
        
    </div>
</div>
    
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            Distribution Record (60 Days)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Date</th>
                                            <th>Customer</th>
                                            <th>Price/Ltr.(Tk.)</th>
                                            <th>Morning(Ltr.)</th>
                                            <th>Evening(Ltr.)</th>
                                            <th>Waste(Ltr.)</th>
                                            <th>Total(Ltr.)</th>
                                            <th>Earning(Tk.)</th>                                            
                                            <th>Action</th>                                       
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>

                                    @foreach( $distributions as $distribution )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>
                                            <td>{{ Carbon\Carbon::parse($distribution->date)->format('jS M Y ') }}</td>
                                            <td>{{ $distribution->customer->name }}</td>
                                            <td>{{ $distribution->price }} Tk.</td>
                                            <td>{{ $distribution->morning }} Ltr.</td>
                                            <td>{{ $distribution->evening }} Ltr.</td>
                                            <td>{{ $distribution->waste }} Ltr.</td>
                                            <td>{{ $distribution->morning+$distribution->evening+$distribution->waste }} Ltr.</td>
                                            <td>{{ ($distribution->morning+$distribution->evening)*$distribution->price }} Tk.</td>
                                            
                                            <td>
                                                <a class="label label-warning" href="{{ route( 'distribution.edit', array( 'id'=> $distribution->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                                {!! Form::open( array( 'route' => array('distribution.destroy', $distribution->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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