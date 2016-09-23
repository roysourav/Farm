  @extends('main')

@section('content')

<!-- Content Header (Page header) -->

<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>Vaccine : {{ $vaccine->name }}</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">

            <a href="{{ route('cow-vaccine.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>

            <a href="{{ route( 'show.cow-vaccine.pdf', ['id' => $vaccine->id ] ) }}" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>
     
        </div>
        
    </div>
</div>
</section>

@include('partials._message')

  <div class="row">
                <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-12">
                                   <b>Details Of Vaccine : {{ $vaccine->name }}</b>
                                </div>                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Cow Name</th>
                                            <th>Cow Id</th>
                                            <th>Applied On</th>
                                            <th>Next Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           @foreach( $vaccine->cows as $cow )
                                            <tr>
                                               
                                                <?php $count++  ?>

                                                 <td>{{ $count }}</td>

                                                <td>{{ $cow->name }}</td>

                                                <td>C-{{ $cow->id }} </td>

                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ') }} </td>

                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->addMonths( $vaccine->duration )->format('jS M Y ') }} </td>

                                                <td>

                                                    <a class="label label-danger" href="{{url('vaccine/delete/'.$cow->id.'/'.$vaccine->id.'')}}"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>

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
