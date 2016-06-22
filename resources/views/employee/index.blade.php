@extends('main')

@section('content')

<section class="content-header">
    <h1>All Employees</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Employee
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>NAME</th>
                                            <th>ID</th>
                                            <th>DESIGNATION</th>
                                            <th>MOBILE</th>
                                            <th>DATE OF APPOINTMENT</th>
                                            <th>MONTHLY SALARY TK.</th>
                                            <th>#</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $employees as $employee )
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{'E-'.$employee->id }}</td>
                                            <td>{{ $employee->designation }}</td>
                                            <td>
                                            <a title=""  href="tel:{{ $employee->mobile }}"> {{ $employee->mobile }}</a>
                                            </td>
                                            <td>{{ $employee->appointment_date }}</td>
                                            <td>{{ $employee->monthly_salary }}</td>

                                             

                                            <td><a class="btn btn-success" href="{{ route( 'employee.show', array( 'id'=> $employee->id ) ) }}">Show</a></td>


                                            <td><a class="btn btn-warning" href="{{ route( 'employee.edit', array( 'id'=> $employee->id ) ) }}">Edit</a></td>

                                            <td>
                                                
                                                {!! Form::open( array( 'route' => array('employee.destroy', $employee->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('Delete', array( 'class' => 'btn btn-danger' ) ) !!}
                                              
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

