@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Milk Record (60 Days)</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            Milk Record (60 Days)
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            
                                            <th>Date</th>
                                            <th>Morning</th>
                                            <th>Evening</th>
                                            <th>Total</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>

                                    @foreach( $milks as $milk )
										<?php $count++  ?>
                                        <tr>

                                            <td>{{ $count }}</td>
                                            <td>{{ Carbon\Carbon::parse($milk->date)->format('jS M Y ') }}</td>
                                            
                                            <td>{{ $milk->morning }}</td>
                                            <td>{{ $milk->evening }}</td>
                                            <td>{{ $milk->morning+$milk->evening }}</td>
                                          
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