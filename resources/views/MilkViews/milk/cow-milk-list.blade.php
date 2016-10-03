@extends('MilkViews.MilkMaster')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
    <div class="row">
        <div class="col-md-6 no_mergin">
            <h3>Milk Details Of All Cows</h3>
        </div>
        <div class="col-md-6">
            <div class="pull-right">
                <a href="{{ route('milk.index') }}" class="btn btn-info"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>           
            </div>        
        </div>
    </div>    
</section>

@include('partials._message')

    <div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            Last 60 Days Record )
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                 <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Name Of Cow</th>
                                            <th>Action</th>         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $count = 0;?> 
                                         @foreach( $cows as $cow )
                                            <?php $count++  ?>
                                            <tr>
                                                <td>{{ $count }}</td>

                                                <td style="display: block;margin: 0 auto;width: 40px;"> {{ Html::image($cow->img, $cow->name, array('class' => 'img-responsive ')) }}</td>

                                                <td>{{ 'C-'.$cow->id }}</td>
                                                <td>{{ $cow->name }}</td>
                                                
                                                <td><a class="label label-success" href="{{ route('cow.milk.details', ['id'=>$cow->id] ) }}"><i class="fa fa-eye" aria-hidden="true"></i> Details</a></td>
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