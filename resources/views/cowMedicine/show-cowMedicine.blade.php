  @extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Medicine : {{ $medicine->name }}</h1>
</section>

@include('partials._message')

  <div class="row">
                <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-10">
                                   <b>Details Of Medicine : {{ $medicine->name }}</b>
                                </div>
                                <div class="col-md-2">
                                    <a href="{{ route('cow-medicine.index') }}" class="btn btn-info pull-right btn-block"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
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
                                            <th>Dose/Day</th>
                                            <th>Duration( Days )</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           @foreach( $medicine->cows as $cow )
                                            <tr>
                                               
                                                <?php $count++  ?>

                                                 <td>{{ $count }}</td>

                                                <td>{{ $cow->name }}</td>

                                                <td>C-{{ $cow->id }} </td>

                                                <td>{{ $cow->pivot->dose }} </td>

                                                <td>{{ $cow->pivot->days }} </td>

                                                <td>{{ Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ') }} </td>

                                                <td>

                                                    <a class="label label-danger" href="{{url('medicine/delete/'.$cow->id.'/'.$medicine->id.'')}}"><i class="fa fa-times" aria-hidden="true"></i> Delete</a>

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
