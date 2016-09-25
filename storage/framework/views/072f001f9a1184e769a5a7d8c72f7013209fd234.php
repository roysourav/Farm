<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header m_bottom_10">
<div class="row">
    <div class="col-md-6 no_mergin">
        <h3>All Vaccines</h3>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <a href="<?php echo e(route('vaccine.create')); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Add New</a>
            <a href="<?php echo e(route('vaccine.list.pdf')); ?>" class="btn btn-primary"> <i class="fa fa-download" aria-hidden="true"></i> Download</a>            
        </div>
        
    </div>
</div>    
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <div class="row">
                                <div class="col-md-12">
                                    List Of All Vaccines
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Vaccine ID</th>
                                            <th>Name Of Vaccine</th>
                                            <th>Next Dose ( Months )</th>
                                            <th>Cost (Tk. Per Unit )</th>
                                            <th>Stock ( In Unit )</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $vaccines as $vaccine ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td><?php echo e($count); ?></td>

                                            
                                            <td>VC-<?php echo e($vaccine->id); ?></td>

                                            <td><?php echo e($vaccine->name); ?></td>

                                            <td><?php echo e($vaccine->duration); ?></td>
                                            <td><?php echo e($vaccine->cost); ?></td>
                                            <td><?php echo e($vaccine->stock); ?></td>
                                            


                                            <td><a class="label label-warning" href="<?php echo e(route( 'vaccine.edit', array( 'id'=> $vaccine->id ) )); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>

                                            
                                                
                                                <?php echo Form::open( array( 'route' => array('vaccine.destroy', $vaccine->id), 'method' => 'DELETE' , 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;') ); ?>


                                                <?php echo Form::submit('X Delete', array( 'class' => '' ) ); ?>

                                              
                                                <?php echo Form::close(); ?>


                                            </td>

                                            
                                        </tr>

                                    <?php endforeach; ?>  
                                       
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('StockConsumptionViews.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>