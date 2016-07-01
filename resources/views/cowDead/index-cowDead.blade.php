@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Dead Cows</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Dead Cows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow</th>
                                            <th> Id</th>
                                            <th>Purchased On</th>
                                            <th>Dead On</th>
                                            <th>Age when Dead</th>
                                            <th>Active For</th>
                                            <th>Reason Of Dead</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $dead_cows as $dead_cow )
										<?php $count++  ?>
                                        <tr>

                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 60px;"> {{ Html::image($dead_cow->cow->img, $dead_cow->cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $dead_cow->cow->name }}</td>

                                            <td>{{ 'C-'.$dead_cow->cow->id }}</td>

                                            <td>{{ $dead_cow->cow->date_of_purchase }}</td>

                                            <td>{{ $dead_cow->date }}</td>
                                            
                                            <td>{!! Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M ') !!}</td>

                                           <td>{!! Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M ') !!}</td>
                                            
                                            <td>{{ $dead_cow->reason }}</td>
                                             
                                            <td><a class="btn btn-success" href="{{ route( 'dead-cow.show', array( 'id'=> $dead_cow->id ) ) }}">Show</a></td>

                                            <td><a class="btn btn-warning" href="{{ route( 'dead-cow.edit', array( 'id'=> $dead_cow->id ) ) }}">Edit</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('dead-cow.destroy', $dead_cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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