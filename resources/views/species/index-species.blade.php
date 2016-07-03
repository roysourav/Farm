@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Species</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    List Of All Species
                                </div>
                                <div class="col-md-6">
                                     {!! Form::open( array( 'route'=>'species.store', 'id'=>'form' ) ) !!}
                                        <div class="input-group input-group-sm">

                                        {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Species Name', 'required'=> '' ) ) !!}

                                        <span class="input-group-btn">
                                         {!! Form::submit( 'Add New Species', array( 'class'=>'btn btn-success btn-flat' ) ) !!}
                                          
                                        </span>

                                      </div>
                                   {!! Form::close() !!}
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
                                            <th>Name Of Species</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $specieses as $species )
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>

                                            
                                            <td>{{ $species->name }}</td>
                                            


                                            <td><a class="btn btn-warning" href="{{ route( 'species.edit', array( 'id'=> $species->id ) ) }}">Edit Species</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('species.destroy', $species->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete Species', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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
        <div class="col-lg-3">
            
        </div>
    </div>

@stop