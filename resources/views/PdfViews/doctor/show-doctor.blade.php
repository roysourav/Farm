@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Doctor - {{ $doctor->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                   <tbody>
                                    
                                        <tr>
                                            <td>Name Of Doctor :</td>
                                            <td>{{ $doctor->name }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Doctor ID:</td>
                                            <td>{{ 'D-'.$doctor->id }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification:</td>
                                            <td>{{ $doctor->qualification }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Service Status:</td>
                                            <td>{{ $doctor->s_status }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:{{ $doctor->mobile }}"> {{ $doctor->mobile }}</a></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Email :</td>
                                            <td>{{ $doctor->email }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td>{{ $doctor->account_name }}</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $doctor->account_no }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Bank :</td>
                                            <td> {{ $doctor->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td> {{ $doctor->branch_name }}</td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
@stop

