@extends('main')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Vaccines</h1>
</section>

@include('partials._message')


<div class="tabbable">
    <ul id="myTab" class="nav nav-tabs ">
    <?php $i = 0; ?>
    @foreach( $vaccines as $vaccine )
    <?php $i++; ?>
        <li class="{{ ( $i == 1 ) ? 'active' : '' }}">
            <a href="#{{ $vaccine->name }}" data-toggle="tab">
                {{ $vaccine->name }}
            </a>
        </li>
    @endforeach                                  
    </ul>

    <div class="tab-content">
        <?php $i = 0; ?>

        @foreach( $vaccines as $vaccine )

         <?php $i++; ?>

        <div class="tab-pane {{ ( $i == 1 ) ? 'in active' : '' }}" id="{{ $vaccine->name }}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-12">
                                   Details Of Vaccine : {{ $vaccine->name }}
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Cow Name</th>
                                            <th>Cow Id</th>
                                            <th>Applied On</th>
                                            <th>Next Date</th>
                                            <th>#</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php $count = 0;  ?>

                                           @foreach( $vaccine->cows as $cow )
                                        <tr>
                                           
                                            <?php $count++  ?>

                                             <td style="color:#fff; background:#9B0D07;">{{ $count }}</td>

                                            <td>{{ $cow->name }}</td>

                                            <td>C-{{ $cow->id }} </td>

                                            <td>{{ Carbon\Carbon::parse($cow->pivot->date)->format('jS M Y ') }} </td>

                                            <td>{{ Carbon\Carbon::parse($cow->pivot->date)->addMonths( $vaccine->duration )->format('jS M Y ') }} </td>

                                            

                                            <td>

                                            <form action="{{ 'url' = }}">
                                                


                                            </form>
                                                
                                                {!! Form::open( array( 'url' => ['cow-vaccine/{$cow->id}/{$vaccine->id}'], 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ) !!}

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
        </div>

        @endforeach

    </div>
</div>

@stop



