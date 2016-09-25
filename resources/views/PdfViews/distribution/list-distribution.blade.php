@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>Distribution Record (Last 60 Days As On {{ Carbon\Carbon::today()->format('jS M Y ') }} )</h3>
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
                                            <th>Customer</th>
                                            <th>Price/Ltr.(Tk.)</th>
                                            <th>Morning(Ltr.)</th>
                                            <th>Evening(Ltr.)</th>
                                            <th>Waste(Ltr.)</th>
                                            <th>Total(Ltr.)</th>
                                            <th>Earning(Tk.)</th>                                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?>

                                    @foreach( $distributions as $distribution )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ Carbon\Carbon::parse($distribution->date)->format('jS M Y ') }}</td>
                                            <td>{{ $distribution->customer->name }}</td>
                                            <td>{{ $distribution->price }} Tk.</td>
                                            <td>{{ $distribution->morning }} Ltr.</td>
                                            <td>{{ $distribution->evening }} Ltr.</td>
                                            <td>{{ $distribution->waste }} Ltr.</td>
                                            <td>{{ $distribution->morning+$distribution->evening+$distribution->waste }} Ltr.</td>
                                            <td>{{ ($distribution->morning+$distribution->evening)*$distribution->price }} Tk.</td>   
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

