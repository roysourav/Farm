@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Vaccine : {{ $vaccine->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Cow Id</th>
                                            <th>Cow Name</th>                                            
                                            <th>Applied On</th>
                                            <th>Next Date</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           @foreach( $vaccine->cows as $cow )
                                            <tr>
                                               
                                                <?php $count++  ?>

                                                 <td>{{ $count }}</td>

                                                 <td>C-{{ $cow->id }} </td>

                                                <td>{{ $cow->name }}</td>

                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ') }} </td>

                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->addMonths( $vaccine->duration )->format('jS M Y ') }} </td>
                                               
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

