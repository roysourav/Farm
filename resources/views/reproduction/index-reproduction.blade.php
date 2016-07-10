@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Reproductions Details</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Cows ( Reproduction )
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
                                            <th>Cow Id</th>
                                            <th>Date Of A.I.</th>
                                            <th>Doctor</th>
                                            <th>Date Of Check</th>
                                            <th>Pregnancy Confirmation</th>
                                            <th>Delivery Date</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $reproductions as $reproduction )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($reproduction->cow->img, $reproduction->cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $reproduction->cow->name }}</td>

                                            <td>{{ 'C-'.$reproduction->cow->id }}</td>

                                           <td>{{ Carbon\Carbon::parse($reproduction->date_of_ai)->format('jS M Y ') }}</td>
                                            
                                            <td>{{ $reproduction->doctor->name }}</td>

                                            <td>{{ Carbon\Carbon::parse($reproduction->date_of_check)->format('jS M Y ') }}</td>

                                            <td>
                                            @if($reproduction->pregnancy > 0 )
                                            {{ 'Yes' }}
                                            @else
                                            {{ 'No' }}
                                            @endif
                                            </td>
                                             
                                            <td>
                                            @if($reproduction->pregnancy > 0 )
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(283)->format('jS M Y ') }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>

                                            <td><a class="label label-success" href="{{ route( 'reproduction.show', array( 'id'=> $reproduction->id ) ) }}">Show</a>


                                            <a class="label label-warning" href="{{ route( 'reproduction.edit', array( 'id'=> $reproduction->id ) ) }}">Edit</a>

                                         
                                                
                                                {!! Form::open( array( 'route' => array('reproduction.destroy', $reproduction->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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