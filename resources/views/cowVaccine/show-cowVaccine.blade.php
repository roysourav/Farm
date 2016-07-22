  @extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Vaccines : {{ $vaccine->name }}</h1>
</section>

@include('partials._message')

  <div class="row">
                <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-10">
                                   <b>Details Of Vaccine : {{ $vaccine->name }}</b>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('cow-vaccine.index') }}" class="btn btn-info pull-right btn-block">Go Back</a>
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

                                                    <a class="label label-danger" href="{{url('vaccine/delete/'.$cow->id.'/'.$vaccine->id.'')}}">Delete</a>

                                                </td>
                                               
                                            </tr>
                                        @endforeach
                                    
                                       
                                    </tbody>
                                </table>
                                <a href="{{ route('cow-vaccine.index') }}" class="btn btn-info pull-right btn-block">Go Back</a>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
        
            </div>

@stop
