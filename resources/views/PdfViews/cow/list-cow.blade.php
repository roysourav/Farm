@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Cows (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
</section>


	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Id</th>
                                            <th>Name Of Cow</th>
                                            <th>Age</th>
                                            <th>Color</th>
                                            <th>Species</th>                                            
                                            <th>percentage</th>
                                            <th>price(Tk.)</th>
                                            <th>Active</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $cows as $cow )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ 'C-'.$cow->id }}</td>
                                            <td>{{ $cow->name }}</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_birth) )->format('%y Y, %m M ') !!}</td>
                                              <td>{{ $cow->color }}</td>
                                            <td>{{ $cow->species->name }}</td>
                                            <td>{{ $cow->percentage }} %</td>
                                            <td>{{ $cow->price }}</td>
                                            <td>{!! Carbon\Carbon::now()->diff(Carbon\Carbon::parse($cow->date_of_purchase) )->format('%y Y, %m M ') !!}</td> 
                                        </tr>

                                    @endforeach  
                                       
                                    </tbody>
                                </table>

                            </div>
                           
                        </div>
                        
                    </div>            
        </div>
    </div>

@stop

