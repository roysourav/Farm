@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Vaccines</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-12">
                                    List Of All Vaccines
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Vaccine ID</th>
                                            <th>Name Of Vaccine</th>
                                            <th>Dose Duration ( Months )</th>
                                            <th>Cost ( Per Unit )</th>
                                            <th>Stock ( In Unit )</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $vaccines as $vaccine )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>

                                            
                                            <td>VC-{{ $vaccine->id }}</td>

                                            <td>{{ $vaccine->name }}</td>

                                            <td>{{ $vaccine->duration }}</td>
                                            <td>{{ $vaccine->cost }}</td>
                                            <td>{{ $vaccine->stock }}</td>
                                            


                                            <td><a class="label label-warning" href="{{ route( 'vaccine.edit', array( 'id'=> $vaccine->id ) ) }}">Edit</a>

                                            
                                                
                                                {!! Form::open( array( 'route' => array('vaccine.destroy', $vaccine->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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