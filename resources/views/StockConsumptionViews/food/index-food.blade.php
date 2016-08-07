@extends('StockConsumptionViews.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Foods</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List Of All Foods
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name Of Food</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $foods as $food )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>

                                            
                                            <td>{{ $food->name }}</td>
                                            


                                            <td><a class="label label-warning" href="{{ route( 'food.edit', array( 'id'=> $food->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Food</a>

                                           
                                                
                                                {!! Form::open( array( 'route' => array('food.destroy', $food->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete Food', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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
                                Add New Food
                            </div>
                            <div class="panel-body">
                                 {!! Form::open( array( 'route'=>'food.store', 'id'=>'form' ) ) !!}
                                        <div class="input-group input-group-sm">

                                        {!! Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Food Name', 'required'=> '' ) ) !!}

                                        <span class="input-group-btn">
                                         {!! Form::submit( '&#10004; Add New Food', array( 'class'=>'btn btn-success btn-flat' ) ) !!}
                                          
                                        </span>

                                      </div>
                                   {!! Form::close() !!}
                                  
                            </div>
                            
                        </div>                       
                                
        </div>
    </div>

@stop