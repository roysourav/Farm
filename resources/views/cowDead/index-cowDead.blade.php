@extends('main')

@section('content')

<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>All Dead Cows</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="{{ route('dead-cow.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
                <a href="{{ route('dead-cow.list.pdf') }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>   
            </div>
            
        </div>
    </div>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Dead Cows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th> Id</th>
                                            <th>Name Of Cow</th>                                            
                                            <th>Purchased On</th>
                                            <th>Dead On</th>
                                            <th>Age when Dead</th>
                                            <th>Active For</th>
                                            <th>Reason Of Dead</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $dead_cows as $dead_cow )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($dead_cow->cow->img, $dead_cow->cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ 'C-'.$dead_cow->cow->id }}</td>
                                            <td>{{ $dead_cow->cow->name }}</td>

                                            <td>{{ Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->format('jS M Y ') }}</td>

                                            <td>{{ Carbon\Carbon::parse($dead_cow->date)->format('jS M Y ') }}</td>

                                            
                                            <td>{!! Carbon\Carbon::parse($dead_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M ') !!}</td>

                                           <td>{!! Carbon\Carbon::parse($dead_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($dead_cow->date) )->format('%y Y, %m M ') !!}</td>
                                            
                                            <td>{{ $dead_cow->reason }}</td>
                                             
                                            <td><a class="label label-success" href="{{ route( 'dead-cow.show', array( 'id' => $dead_cow->id ) ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>

                                            <a class="label label-warning" href="{{ route( 'dead-cow.edit', array( 'id'=> $dead_cow->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                            
                                                
                                                {!! Form::open( array( 'route' => array('dead-cow.destroy', $dead_cow->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete', array( 'class' => '' ) ) !!}
                                              
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