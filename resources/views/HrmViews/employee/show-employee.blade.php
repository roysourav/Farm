@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Employee : {{ $employee->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-8">
                    <div class="panel panel-default">
                         <div class="row">   
                            <div class="col-md-6">  
                                <div class="panel-heading">
                                <h4>Details Of Employee - {{ $employee->name }} </h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="image">
                                {{ Html::image($employee->img, $employee->name, array('class' => 'img-responsive img-thumbnail')) }}
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
                                            <td>Employee ID :</td>
                                            <td>{{ 'E-'.$employee->id }}</td>
                                            
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
        <div class="col-lg-4">
                        <div class="panel panel-primary m_top_25">
                            <div class="panel-heading">
                                Log Information
                            </div>
                            <div class="panel-body">
                                <h5>Created At:</h5>
                                <p>{!! Carbon\Carbon::parse($employee->created_at)->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($employee->updated_at)->format('jS M Y , h:i A') !!}</p>
                               
                            </div>
                            <div class="panel-footer">
                            <div class="buttons">
                                 <a href="{{ route('employee.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Back</a>
                                <a href="{{ route( 'employee.edit', array( 'id'=> $employee->id ) ) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                 <a href="{{ route('show.employee.pdf', ['id'=>$employee->id] ) }}" class="btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
                            </div>
                               
                            </div>
                        </div>
                    </div>
    </div>

@stop