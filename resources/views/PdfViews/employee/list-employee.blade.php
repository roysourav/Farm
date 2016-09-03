@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Employees (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Working </th>
                                            <th>Salary TK.</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $employees as $employee )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            
                                            <td>{{'E-'.$employee->id }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->date_of_birth) )->format('%y Y') !!}</td>
                                            <td>{{ $employee->designation }}</td>
                                            <td>{{ $employee->mobile }}</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($employee->appointment_date) )->format('%y Y, %m M') !!}</td>
                                            <td>{{ $employee->monthly_salary }}</td>

                                        </tr>

                                    @endforeach  
                                       
                                    </tbody>
                                </table>



                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
        </div>
    </div>

@stop

