@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Cows</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Cows
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
                                            <th>Color</th>
                                            <th>Age</th>
                                            <th>Species</th>
                                            <th>Purchesed On</th>
                                            <th>Seller</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $cows as $cow )
										<?php $count++  ?>
                                        <tr>

                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 60px;"> {{ Html::image($cow->img, $cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $cow->name }}</td>

                                            <td>{{ 'C-'.$cow->id }}</td>

                                            <td>{{ $cow->color }}</td>
                                            
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Y, %m M ') !!}</td>

                                            <td>{{ $cow->species->name }}</td>

                                           <td>{{ Carbon\Carbon::parse($cow->date_of_purchase)->format('jS M Y ') }}</td>
                                            
                                            <td>{{ $cow->supplier->name }}</td>
                                             

                                            <td><a class="btn btn-success" href="{{ route( 'cow.show', array( 'id'=> $cow->id ) ) }}">Show</a></td>


                                            <td><a class="btn btn-warning" href="{{ route( 'cow.edit', array( 'id'=> $cow->id ) ) }}">Edit</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('cow.destroy', $cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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