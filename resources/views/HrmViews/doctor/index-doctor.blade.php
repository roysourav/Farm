@extends('HrmViews.HrmMaster')

@section('content')

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Doctors</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
        <a href="{{ route('doctor.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
        <a href="{{ route('doctor.list.pdf') }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
        
            
        </div>
        
    </div>
</div>
    
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Doctors
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Id</th>
                                            <th>Name Of Doctor</th>
                                            <th>Qualification</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $doctors as $doctor )
										<?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($doctor->img, $doctor->name, array('class' => 'img-responsive ')) }}</td>
                                            <td>{{ 'D-'.$doctor->id }}</td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->qualification }}</td>
                                            
                                            <td>
                                            <a title=""  href="tel:{{ $doctor->mobile }}"> {{ $doctor->mobile }}</a>
                                            </td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->account_no }}</td>
                                            <td>{{ $doctor->bank_name }}</td>
                                            <td>{{ $doctor->branch_name }}</td>

                                             

                                            <td><a class="label label-success" href="{{ route( 'doctor.show', array( 'id'=> $doctor->id ) ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                                <a class="label label-warning" href="{{ route( 'doctor.edit', array( 'id'=> $doctor->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                            
                                                
                                                {!! Form::open( array( 'route' => array('doctor.destroy', $doctor->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

                                                {!! Form::submit('X Delete', array( 'class' => '' ) ) !!}
                                              
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