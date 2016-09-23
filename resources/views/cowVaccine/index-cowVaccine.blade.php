@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Vaccines</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
          <a href="{{ route('cow-vaccine.create') }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New Record</a>
        </div>   
    </div>
</div>
</section>

@include('partials._message')
        <div class="content">
            <div class="row">
                @foreach( $vaccines as $vaccine )
                        <div class="col-lg-3 col-xs-6">
                          <!-- small box -->
                          <div class="small-box bg-aqua">
                            <div class="inner">
                              <h4>{{ $vaccine->name }}</h4>
                            </div>
                           
                            <a href="{{ route( 'cow-vaccine.show', ['id' => $vaccine->id ] ) }}" class="small-box-footer">
                              View Details &nbsp; <i class="fa fa-arrow-circle-right"></i>
                            </a>
                          </div>
                        </div>
                @endforeach
            </div>
        </div>       
@stop



