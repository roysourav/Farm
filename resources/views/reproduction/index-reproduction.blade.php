@extends('main')

@section('content')


<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>Reproductions Details</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
        <a href="{{ route('reproduction.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
        <a href="#" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
     
        </div>
        
    </div>
</div>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Cows ( Reproduction )
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>Name Of Cow</th>
                                            <th>Cow Id</th>
                                            <th>Date Of A.I.</th>
                                            <th>Doctor</th>
                                            <th>Date Of Check</th>
                                            <th>Pregnancy Confirmation</th>
                                            <th>Delivery Date</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    @foreach( $reproductions as $reproduction )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>

                                            <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($reproduction->cow->img, $reproduction->cow->name, array('class' => 'img-responsive ')) }}</td>

                                            <td>{{ $reproduction->cow->name }}</td>

                                            <td>{{ 'C-'.$reproduction->cow->id }}</td>

                                           <td>{{ Carbon\Carbon::parse($reproduction->date_of_ai)->format('jS M Y ') }}</td>
                                            
                                            <td>{{ $reproduction->doctor->name }}</td>

                                            <td>{{ Carbon\Carbon::parse($reproduction->date_of_check)->format('jS M Y ') }}</td>

                                            <td>
                                            @if($reproduction->pregnancy > 0 )
                                            {{ 'Yes' }}
                                            @else
                                            {{ 'No' }}
                                            @endif
                                            </td>
                                             
                                            <td>
                                            @if($reproduction->pregnancy > 0 )
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(278)->format('jS') }} To 
                                            {{ Carbon\Carbon::parse($reproduction->date_of_ai)->addDays(288)->format('jS M Y ') }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>

                                            <td><a class="label label-success" href="{{ route( 'reproduction.show', array( 'id'=> $reproduction->id ) ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Show</a>


                                            <a class="label label-warning" href="{{ route( 'reproduction.edit', array( 'id'=> $reproduction->id ) ) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                         
                                                
                                                {!! Form::open( array( 'route' => array('reproduction.destroy', $reproduction->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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