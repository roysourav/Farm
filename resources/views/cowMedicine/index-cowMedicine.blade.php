@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Medicines</h1>
</section>

@include('partials._message')
        <div class="content">
            <div class="row">

                @foreach( $medicines as $medicine )

                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h4>{{ $medicine->name }}</h4>
                            </div>
                           
                            <a href="{{ route( 'cow-medicine.show', ['id' => $medicine->id ] ) }}" class="small-box-footer">
                              View Details &nbsp; <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>

                @endforeach

            </div>
        </div>
       
@stop


