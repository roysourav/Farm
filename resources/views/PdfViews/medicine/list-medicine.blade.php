@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Medicines (As On {{ Carbon\Carbon::today()->format('jS M Y ') }} )</h3>
</section>
	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name Of Medicine</th>
                                            <th> Id</th>
                                            <th>Category</th>
                                            <th>Cost(Per Unit)TK.</th>
                                            <th>Stock(Unit)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $medicines as $medicine )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $medicine->name }}</td>
                                            <td>{{ 'M-'.$medicine->id }}</td>
                                            <td>{{ $medicine->category->name }}</td>
                                            <td>{{ $medicine->cost }}</td>
                                            <td>{{ $medicine->stock }}</td>
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

