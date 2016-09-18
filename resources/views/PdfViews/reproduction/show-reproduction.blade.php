@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Reproduction Details Of Cow: {{ $reproduction->cow->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody>
                                        <tr>
                                            <td>Name :</td>
                                            <td>{{ $reproduction->cow->name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Id :</td>
                                            <td>C-{{ $reproduction->cow->id }}</td>
                                            
                                        </tr>
                                    
                                        <tr>
                                            <td>Date Of A.I. :</td>
                                            <td>{!! Carbon\Carbon::parse( $reproduction->date_of_ai )->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>percentage Of Seed (bull) :</td>
                                            <td>{{ $reproduction->percentage }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Seed Supplier :</td>
                                            <td>{{ $reproduction->supplier->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor :</td>
                                            <td>{{ $reproduction->doctor->name }}</td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Date Of Check :</td>
                                            <td>{!! Carbon\Carbon::parse( $reproduction->date_of_check )->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Pregnancy Confirm :</td>
                                            <td>@if($reproduction->pregnancy > 0 )
                                            {{ 'Yes' }}
                                            @else
                                            {{ 'No' }}
                                            @endif</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Confirm By (Doctor) :</td>
                                            <td>{{ $reproduction->preg_confirm_doctor->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Delivery Date (Expected):</td>
                                            <td>@if($reproduction->pregnancy > 0 )
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(283)->format('jS M Y ') }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif</td>
                                            
                                        </tr>
                                        

                                    </tbody>

                                </table>
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
@stop

