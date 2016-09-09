@extends('PdfViews.pdfMaster')

@section('content')

<section class="content-header">
    <h3>All Doctors (As On {{ Carbon\Carbon::today()->format('jS M Y ') }})</h3>
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
                                            <th>Name Of Doctor</th>
                                            <th>Qualification</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Bank Account No.</th>
                                            <th>Bank</th>
                                            <th>Branch</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $count = 0;?> 
                                    @foreach( $doctors as $doctor )
                                        <?php $count++  ?>
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ 'D-'.$doctor->id }}</td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->qualification }}</td>
                                            <td>{{ $doctor->mobile }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->account_no }}</td>
                                            <td>{{ $doctor->bank_name }}</td>
                                            <td>{{ $doctor->branch_name }}</td>
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

