@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Sold Cow - {{ $sold_cow->cow->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
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
                                            <td>{{ $sold_cow->cow->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td>{{ 'C-'.$sold_cow->cow->id }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td>{{ $sold_cow->cow->sex }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td>{{ $sold_cow->cow->color }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            @if($sold_cow->cow->significant_sign)
                                            {{ $sold_cow->cow->significant_sign }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_birth)->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased On :</td>
                                            <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_purchase)->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Purchased Value (TK.) :</td>
                                            <td>{{ $sold_cow->cow->price }} Tk.</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sell Value (TK.) :</td>
                                            <td>{{ $sold_cow->price }} Tk.</td>
                                            
                                        </tr>


                                         <tr>
                                            <td>Sold On :</td>
                                            
                                            <td>{!! Carbon\Carbon::parse($sold_cow->date )->format('jS M Y ') !!}</td>
                                        </tr>

                                        <tr>
                                            <td>Age When Sold :</td>
                                            <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_birth)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Year, %m Month  %d Days') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Active In Farm For :</td>
                                            <td>{!! Carbon\Carbon::parse($sold_cow->cow->date_of_purchase)->diff(Carbon\Carbon::parse($sold_cow->date) )->format('%y Year, %m Month %d Days') !!}</td>
                                            
                                        </tr>

                                       
                                         <tr>
                                            <td>Reason Of Sell :</td>
                                            
                                            <td>
                                             {{ $sold_cow->reason }}
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

