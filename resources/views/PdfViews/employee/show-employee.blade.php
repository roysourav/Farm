@extends('PdfViews.pdfMaster')

@section('content')

<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Employee - {{ $employee->name }} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h4>
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
                                            <td>{{ $employee->name }}</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Designation :</td>
                                            <td>{{ $employee->designation }}</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Date of Birth :</td>
                                            <td>{!! Carbon\Carbon::parse( $employee->date_of_birth )->format('jS M Y ') !!}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Age :</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->date_of_birth) )->format('%y Years, %m Months') !!} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Father's Name :</td>
                                            <td>{{ $employee->father_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mother's Name :</td>
                                            <td>{{ $employee->mother_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>NID :</td>
                                            <td>{{ $employee->nid }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Mobile No :</td>
                                            <td><a title=""  href="tel:{{ $employee->mobile }}"> {{ $employee->mobile }}</a></td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Emergency Mobile No :</td>
                                            <td>
                                            @if($employee->e_mobile)
                                            <a title=""  href="tel:{{ $employee->e_mobile }}"> {{ $employee->e_mobile }}</a>
                                            @else 
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Email :</td>
                                            <td>
                                            @if($employee->email)
                                             {{ $employee->email }}
                                            @else 
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Present Address :</td>
                                            <td>{{ $employee->address }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Permanent Address :</td>
                                            <td>
                                            @if($employee->p_address)
                                            {{ $employee->p_address }}
                                            @else
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Qualification :</td>
                                            <td>{{ $employee->qualification }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Skills :</td>
                                            <td>
                                            @if(isset($skills))
                                            @foreach( $skills as $skill)
                                                {{ $skill }} ,
                                            @endforeach
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Date Of Appointment :</td>
                                            <td>{{ Carbon\Carbon::parse($employee->appointment_date)->format('jS M Y ') }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Working For :</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->appointment_date) )->format('%y Y, %m M') !!} (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Reference :</td>
                                            <td>
                                            @if($employee->reference)
                                            {{ $employee->reference }}
                                            @else
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Disability :</td>
                                            <td>
                                            @if($employee->disability)
                                            {{ $employee->disability }}
                                            @else
                                            N/A
                                            @endif
                                            </td>
                                            
                                        </tr>
                                        

                                        <tr>
                                            <td>Monthly Salary :</td>
                                            <td>TK {{ $employee->monthly_salary }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Name On Bank Account :</td>
                                            <td>{{ $employee->account_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Bank Account No :</td>
                                            <td>{{ $employee->account_no }}</td>
                                            
                                        </tr>
                                         <tr>
                                            <td>Name Of Bank :</td>
                                            <td>{{ $employee->bank_name }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Name Of Branch :</td>
                                            <td>{{ $employee->branch_name }}</td>
                                            
                                        </tr>

                                    </tbody>

                                </table>
                                
                                  
                            </div>
                           
                        </div>
                       
                    </div>
                   
        </div>
        
    </div>
	
@stop

