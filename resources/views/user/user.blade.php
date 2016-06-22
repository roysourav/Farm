@extends('main')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">All Users</h3>
    </div>
                
</div> 

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
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
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ 'U-'.$user->id }}</td>
                                           
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                           


                                            <td>
                                          
                                                {!! Form::open( array( 'route' => array('user.destroy', $user->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;' ) ) !!}

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