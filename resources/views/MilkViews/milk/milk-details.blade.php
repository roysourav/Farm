@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Milk Record Of {{ Carbon\Carbon::parse($date)->format('jS M Y ') }} </h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="{{ route('milk.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                
                <a href="{{ route('milk.details.pdf', [ 'date'=> strtotime($date) ] ) }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
            </div>        
        </div>
    </div>    
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    Milk Record Of {{ Carbon\Carbon::parse($date)->format('jS M Y ') }}
                </div>
                        <!-- /.panel-heading -->
                <div class="boxy-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>#</th>
                                    <th>Cow Id</th>
                                    <th>Cow Name</th>
                                    <th>Morning(Ltr.)</th>
                                    <th>Evening(Ltr.)</th>
                                    <th>Total(Ltr.)</th>
                                </tr>
                            </thead>
                            <tbody>
    							<?php 
                                $count = 0;
                                $morning_total = 0;
                                $evening_total = 0;
                                ?>

                                @foreach( $milks as $milk )
    								<?php 
                                    $count++;
                                    $morning_total += $milk->morning;
                                    $evening_total += $milk->evening;

                                     ?>
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($milk->cow->img, $milk->cow->name, array('class' => 'img-responsive ')) }}</td>
                                        <td>C-{{ $milk->cow->id }}</td>
                                        <td>{{ $milk->cow->name }}</td>
                                        <td>{{ $milk->morning }}</td>
                                        <td>{{ $milk->evening }}</td>
                                        <td>{{ $milk->morning+$milk->evening }}</td>
                                    </tr>
                                @endforeach 
                                <tr>
                                    <td>Grand Total</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $morning_total }}</td>
                                    <td>{{ $evening_total }}</td>
                                    <td>{{ $morning_total + $evening_total }}</td>
                                </tr>                                        
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