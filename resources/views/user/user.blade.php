@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Users</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                             <th>Name Of User</th>
                                            <th>Id</th>
                                           
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $users as $user )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ 'U-'.$user->id }}</td>
                                           
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                           


                                            <td>
                                          
                                                {!! Form::open( array( 'route' => array('user.destroy', $user->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;' ) ) !!}

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