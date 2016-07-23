@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Medicine Categories</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                                    List Of All Medicine Categories
                               
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name Of Medicine Category</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $medicine_categories as $category )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>

                                            
                                            <td>{{ $category->name }}</td>
                                            


                                            <td><a class="label label-warning" href="{{ route( 'medicine-category.edit', array( 'id'=> $category->id ) ) }}">Edit Category</a>

                                           
                                                
                                                {!! Form::open( array( 'route' => array('medicine-category.destroy', $category->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete Category', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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
                                Add New Category
                            </div>
                            <div class="panel-body">
                                 {!! Form::open( array( 'route'=>'medicine-category.store', 'id'=>'form' ) ) !!}
                                        <div class="input-group input-group-sm">

                                        {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Medicine Category Name', 'required'=> '' ) ) !!}

                                        <span class="input-group-btn">
                                         {!! Form::submit( 'Add New Category', array( 'class'=>'btn btn-success btn-flat' ) ) !!}
                                          
                                        </span>

                                      </div>
                                   {!! Form::close() !!}
                                  
                            </div>
                            
                        </div>                       
                                
        </div>
    </div>

@stop