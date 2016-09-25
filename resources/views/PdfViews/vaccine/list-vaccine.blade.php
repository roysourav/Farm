@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Vaccines (As On {{ Carbon\Carbon::today()->format('jS M Y ') }} )</h3>
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
                                            <th>Vaccine ID</th>
                                            <th>Name Of Vaccine</th>
                                            <th>Next Dose( Months )</th>
                                            <th>Cost (Tk. Per Unit )</th>
                                            <th>Stock ( In Unit )</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $vaccines as $vaccine )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>VC-{{ $vaccine->id }}</td>
                                            <td>{{ $vaccine->name }}</td>
                                            <td>{{ $vaccine->duration }}</td>
                                            <td>{{ $vaccine->cost }}</td>
                                            <td>{{ $vaccine->stock }}</td>
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

