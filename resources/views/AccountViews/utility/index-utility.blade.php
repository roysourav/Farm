@extends('AccountViews.AccountMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Utilities</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Utilities    
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name Of Utility </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $utilities as $utility )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $utility->name }}</td>
                                            
                                            <td><a class="label label-warning" href="{{ route( 'utility.edit', array( 'id'=> $utility->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Utility</a>
                                                
                                                {!! Form::open( array( 'route' => array('utility.destroy', $utility->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete Utility', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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
        <div class="col-lg-4">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add New Utility 
                </div>
                <div class="panel-body">
                    {!! Form::open( array( 'route'=>'utility.store', 'id'=>'form' ) ) !!}
                        <div class="input-group input-group-sm">

                            {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter utility Name', 'required'=> '' ) ) !!}

                            <span class="input-group-btn">
                                {!! Form::submit( '&#10004; Add New Utility', array( 'class'=>'btn btn-success btn-flat' ) ) !!}
                                          
                            </span>

                        </div>
                    {!! Form::close() !!}
                                  
                </div>
                            
            </div>                       
                                
        </div>
    </div>

@stop