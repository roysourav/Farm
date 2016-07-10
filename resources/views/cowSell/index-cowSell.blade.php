@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Sold Cows</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Sold Cows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow</th>
                                            <th> Id</th>
                                            <th>Purchased On</th>
                                            <th>Sold On</th>
                                            <th>Age when Sold</th>
                                            <th>Active For</th>
                                            <th>Sold Price (Tk.)</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $sold_cows as $sold_cow )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($sold_cow->cow->img, $sold_cow->cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $sold_cow->cow->name }}</td>

                                            <td>{{ 'C-'.$sold_cow->cow->id }}</td>

                                            <td>{{ Carbon\Carbon::parse($sold_cow->cow->date_of_purchase )->format('jS M Y ') }}</td>

                                            <td>{{ Carbon\Carbon::parse( $sold_cow->date )->format('jS M Y ') }}</td>
                                            
                                            <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Y, %m M ') !!}</td>

                                           <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Y, %m M ') !!}</td>
                                            
                                            <td>{{ $sold_cow->price }}</td>
                                             
                                            <td><a class="label label-success" href="{{ route( 'sell-cow.show', array( 'id'=> $sold_cow->id ) ) }}">Show</a>

                                            <a class="label label-warning" href="{{ route( 'sell-cow.edit', array( 'id'=> $sold_cow->id ) ) }}">Edit</a>

                                            
                                                
                                                {!! Form::open( array( 'route' => array('dead-cow.destroy', $sold_cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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