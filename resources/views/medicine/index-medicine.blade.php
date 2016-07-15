@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Medicines</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Medicines
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            
                                            <th>Name Of Medicine</th>
                                            <th> Id</th>
                                            <th>Category</th>
                                            <th>Cost(Per Unit)TK.</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $medicines as $medicine )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td>{{ $medicine->name }}</td>
                                            <td>{{ 'M-'.$medicine->id }}</td>

                                            <td>{{ $medicine->category->name }}</td>

                                            <td>{{ $medicine->cost }}</td>
                                            
                                            
                                            <td>
                                            <a class="label label-warning" href="{{ route( 'medicine.edit', array( 'id'=> $medicine->id ) ) }}">Edit</a>

                                         
                                                
                                                {!! Form::open( array( 'route' => array('medicine.destroy', $medicine->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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