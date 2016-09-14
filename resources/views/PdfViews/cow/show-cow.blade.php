@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Cow - {{ $cow->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                  <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow :</td>
                                            <td>{{ $cow->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td>{{ 'C-'.$cow->id }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td>{{ $cow->sex }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td>{{ $cow->color }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Species :</td>
                                            <td>{{ $cow->species->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Cow Percentage(Seed) :</td>
                                            <td>{{ $cow->percentage }} %</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td>{!! Carbon\Carbon::parse($cow->date_of_birth)->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Age :</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Years, %m Months ,%d Days') !!}</td>
                                            
                                        </tr>

                                          <tr>
                                            <td>Weight :</td>
                                            <td>{{ $cow->weight }} Kg</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            @if($cow->significant_sign)
                                            {{ $cow->significant_sign }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Price (TK.) :</td>
                                            <td>{{ $cow->price }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Purchase :</td>
                                            <td>{!! Carbon\Carbon::parse($cow->date_of_purchase)->format('jS M Y ') !!}</td>
                                            
                                        </tr>
                                          <tr>
                                            <td>Active In Farm:</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_purchase) )->format('%y Y, %m M ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Supplier :</td>
                                            <td>{{ $cow->supplier->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Active Milk Channels :</td>
                                            <td>{{ $cow->milking_channels }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Milking :</td>

                                            <td>
                                             @if($cow->date_of_milking)
                                            {!! Carbon\Carbon::parse($cow->date_of_milking)->format('jS M Y ') !!}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Dryness :</td>
                                            
                                            <td>
                                             @if($cow->date_of_dryness)
                                            {!! Carbon\Carbon::parse($cow->date_of_dryness)->format('jS M Y ') !!}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Disease :</td>
                                            
                                            <td>
                                             @if($cow->disease)
                                            {{ $cow->disease }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>


                                    </tbody>

                                </table>
                                
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
@stop

