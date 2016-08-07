@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Edit Medicine Category</h1>
</section>

@include('partials._message')

	<div class="row">
       
        <div class="col-lg-6">
            <div class="box box-info">
                <div class="box-header">
                    Milk Entry | Date : {{ Carbon\Carbon::parse($milk->date)->format('jS M Y ') }}
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
                                         {!! Form::model( $milk, array( 'method'=>'put', 'route'=> array( 'milk.update', $milk->id ),'id'=>'form' ) ) !!}
                                        <tr>
                                            <td>
                                                Cow : {{$milk->cow->name}} ( C-{{$milk->cow->id}} )
                                            </td>

                                                {{ Form::hidden('date', $milk->date, ['required'=> ''] ) }}

                                            <td>{{ Form::selectRange( 'morning',0,15,$milk->morning,['required'=> ''] ) }}</td>

                                            <td>{{ Form::selectRange( 'evening',0,15,$milk->evening,['required'=> ''] ) }}</td>

                                           <td>{!! Form::submit( 'Update', array( 'class'=>'label label-warning' ) ) !!}</td>

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