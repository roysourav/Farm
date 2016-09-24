@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>Milk Record Of {{ Carbon\Carbon::parse($date)->format('jS M Y ') }}</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
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
                                                                                <td>{{ $morning_total }}</td>
                                        <td>{{ $evening_total }}</td>
                                        <td>{{ $morning_total + $evening_total }}</td>
                                    </tr>                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>            
        </div>
    </div>

@stop

