@extends('MilkViews.MilkMaster')


@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">

    <h1>Milk Entry | Date : {{ Carbon\Carbon::parse($date)->format('jS M Y ') }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-6">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Cows  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>                                            
                                            <th>Cow Id</th>
                                            <th>Cow Name</th> 
                                            <th> Morning ( Ltr.)</th>
                                            <th> Evening ( Ltr.)</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $milks as $milk )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>
                                            
                                            <td>C-{{ $milk->cow->id }}  </td>
                                            <td>{{ $milk->cow->name }} </td>
                                            
                                            <td>{{ $milk->morning }}</td>

                                            <td>{{ $milk->evening }}</td>
                                            <td><a class="label label-warning" href="{{ route( 'milk.edit', array( 'id'=> $milk->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                                {!! Form::open( array( 'route' => array('milk.destroy', $milk->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header">
                    Milk Entry | Date : {{ Carbon\Carbon::parse($date)->format('jS M Y ') }}
                </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cow (Id )</th>
                                            
                                            <th> Morning ( Ltr.)</th>
                                            <th> Evening ( Ltr.)</th>
                                            <th> Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         {!! Form::open( array( 'route'=>'milk.store', 'id'=>'form' ) ) !!}
                                        <tr>
                                            <td>
                                                <select name="cow_id" class="form-control" required="">
                                                <option  value="" selected="Please Select">Please Select</option>
                                                @foreach($cows as $cow)
                                                    <option value="{{$cow->id}}">{{ $cow->name }} ( C-{{ $cow->id }})</option>
                                                @endforeach
                                                </select>
                                            </td>

                                                {{ Form::hidden('date', $date, ['required'=> ''] ) }}

                                            <td>{{ Form::selectRange( 'morning',0,15,null,['required'=> ''] ) }}</td>

                                            <td>{{ Form::selectRange( 'evening',0,15,null,['required'=> ''] ) }}</td>

                                           <td>{!! Form::submit( '&#10004; Add', array( 'class'=>'label label-success' ) ) !!}</td>

                                        </tr>
                                        {!! Form::close() !!}

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>                     
                                
        </div>
    </div>

@stop

