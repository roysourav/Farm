@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Cow : {{ $cow->name }}</h1>
</section>

@include('partials._message')

	<div class="row">
        <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Details Of Cow - {{ $cow->name }} 
                        </div>
                         
                             <div class="image ">
                            {{ Html::image($cow->img, $cow->name, array('class' => 'img-responsive img-thumbnail')) }}
                            </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive text-float-left">
                                <table class="table table-striped table-bordered table-hover">
                                    
                                    <tbody class="text-align-left">
                                    
                                        <tr>
                                            <td>Name Of Cow :</td>
                                            <td>{{ $cow->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Cow ID :</td>
                                            <td>{{ 'C-'.$cow->id }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Sex :</td>
                                            <td>{{ $cow->sex }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Color :</td>
                                            <td>{{ $cow->color }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Birth :</td>
                                            <td>{!! Carbon\Carbon::parse($cow->date_of_birth)->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Age :</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Years, %m Months ,%d Days') !!}</td>
                                            
                                        </tr>

                                          <tr>
                                            <td>Weight :</td>
                                            <td>{{ $cow->weight }} Kg</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Significant Sign :</td>
                                            <td>

                                            @if($cow->significant_sign)
                                            {{ $cow->significant_sign }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                       <tr>
                                            <td>Price (TK.) :</td>
                                            <td>{{ $cow->price }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Purchase :</td>
                                            <td>{!! Carbon\Carbon::parse($cow->date_of_purchase)->format('jS M Y ') !!}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Seller :</td>
                                            <td>{{ $cow->seller->name }}</td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Active Milk Channels :</td>
                                            <td>{{ $cow->milking_channels }}</td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Milking :</td>

                                            <td>
                                             @if($cow->date_of_milking)
                                            {!! Carbon\Carbon::parse($cow->date_of_milking)->format('jS M Y ') !!}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Date Of Dryness :</td>
                                            
                                            <td>
                                             @if($cow->date_of_dryness)
                                            {!! Carbon\Carbon::parse($cow->date_of_dryness)->format('jS M Y ') !!}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
                                        </tr>

                                         <tr>
                                            <td>Disease :</td>
                                            
                                            <td>
                                             @if($cow->disease)
                                            {{ $cow->disease }}
                                            @else
                                            {{ 'N/A' }}
                                            @endif
                                            </td>
                                            
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
                                <p>{!! Carbon\Carbon::parse($cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                <h5>Last Updated At:</h5>
                                <p>{!! Carbon\Carbon::parse($cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A') !!}</p>
                                
                                
                            </div>
                            <div class="panel-footer">
                                <div class="buttons">
                                    <a href="{{ route('cow.index') }}" class="btn btn-primary">Go Back</a>
                                    <a href="{{ route( 'cow.edit', array( 'id'=> $cow->id ) ) }}" class="btn btn-warning">Edit</a>
                                </div>
                                
                            </div>
                        </div>
        </div>
    </div>

@stop