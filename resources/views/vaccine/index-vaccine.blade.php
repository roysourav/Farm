@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Vaccines</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-12">
                                    List Of All Vaccines
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Vaccine ID</th>
                                            <th>Name Of Vaccine</th>
                                            <th>Dose Duration ( Months )</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $vaccines as $vaccine )
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>

                                            
                                            <td>VC-{{ $vaccine->id }}</td>

                                            <td>{{ $vaccine->name }}</td>

                                            <td>{{ $vaccine->duration }} Months</td>
                                            


                                            <td><a class="btn btn-warning" href="{{ route( 'vaccine.edit', array( 'id'=> $vaccine->id ) ) }}">Edit Vaccine</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('vaccine.destroy', $vaccine->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete Vaccine', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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