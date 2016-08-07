@extends('HrmViews.HrmMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Employee : {{ $employee->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of {{ $employee->name }}
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
                                            <td>Address :</td>
                                            <td>{{ $employee->address }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>Date Of Appointment :</td>
                                            <td>{{ $employee->appointment_date }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Monthly Salary :</td>
                                            <td>TK {{ $employee->monthly_salary }}</td>
                                            
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
        <div class="col-lg-3">
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
                                 <a href="{{ route('employee.index') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                <a href="{{ route( 'employee.edit', array( 'id'=> $employee->id ) ) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            </div>
                               
                            </div>
                        </div>
                    </div>
    </div>

@stop