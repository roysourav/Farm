@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>Milk Record (60 Days As On {{ Carbon\Carbon::today()->format('jS M Y ') }} )</h3>
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
                                            <th>Date</th>
                                            <th>Morning(Ltr.)</th>
                                            <th>Evening(Ltr.)</th>
                                            <th>Total(Ltr.)</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?>

                                    @foreach( $milks as $milk )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ Carbon\Carbon::parse($milk->date)->format('jS M Y ') }}</td>
                                            
                                            <td>{{ $milk->morning }}</td>
                                            <td>{{ $milk->evening }}</td>
                                            <td>{{ $milk->morning+$milk->evening }}</td>
                                        </tr>

                                    @endforeach                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>            
        </div>
    </div>

@stop

