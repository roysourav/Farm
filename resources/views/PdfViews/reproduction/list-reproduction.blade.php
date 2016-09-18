@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>Reproductions Details (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
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
                                            <th>Name Of Cow</th>
                                            <th>Date Of A.I.</th>
                                            <th>Doctor</th>
                                            <th>Date Of Check</th>
                                            <th>Pregnancy Confirmation</th>
                                            <th>Delivery Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $reproductions as $reproduction )
                                        <?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td>{{ 'C-'.$reproduction->cow->id }}</td>

                                            <td>{{ $reproduction->cow->name }}</td>

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
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(278)->format('jS') }} To 
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(288)->format('jS M Y ') }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                           
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

