@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Medicine : {{ $medicine->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
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
                                            <th>Dose/Day</th>
                                            <th>Duration( Days )</th>
                                            <th>Date</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           @foreach( $medicine->cows as $cow )
                                            <tr>
                                               
                                                <?php $count++  ?>
                                                <td>{{ $count }}</td>
                                                <td>C-{{ $cow->id }} </td>
                                                <td>{{ $cow->name }}</td>
                                                <td>{{ $cow->pivot->dose }} </td>
                                                <td>{{ $cow->pivot->days }} </td>
                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ') }} </td>

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

