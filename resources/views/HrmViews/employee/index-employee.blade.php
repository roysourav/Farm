@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header">
    <h1>All Employees</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Employee
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>ID</th>
                                            <th>Designation</th>
                                            <th>Mobile</th>
                                            <th>Date Of Appointment</th>
                                            <th>Monthly Salary TK.</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $employees as $employee )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{'E-'.$employee->id }}</td>
                                            <td>{{ $employee->designation }}</td>
                                            <td>
                                            <a title=""  href="tel:{{ $employee->mobile }}"> {{ $employee->mobile }}</a>
                                            </td>
                                            <td>{{ $employee->appointment_date }}</td>
                                            <td>{{ $employee->monthly_salary }}</td>

                                             

                                            <td><a class="label label-success" href="{{ route( 'employee.show', array( 'id'=> $employee->id ) ) }}">Show</a>


                                            <a class="label label-warning" href="{{ route( 'employee.edit', array( 'id'=> $employee->id ) ) }}">Edit</a>

                                            
                                                
                                                {!! Form::open( array( 'route' => array('employee.destroy', $employee->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete', array( 'class' => '' ) ) !!}
                                              
                                                {!! Form::close() !!}

                                            </td>

                                            
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

