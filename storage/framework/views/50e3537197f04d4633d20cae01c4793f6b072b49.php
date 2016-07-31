<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Select Date For Milk Entry</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                       <div class="panel panel-default">
                            
                            <div class="panel-body">
                                 <?php echo Form::open( array( 'route'=>'milk.date.store', 'id'=>'form' ) ); ?>

                                        <div class="input-group input-group-sm">

                                            <div class="form-group ">

                                                <label class="col-md-2 control-label">Select Date *</label>

                                                <div class="col-md-8">

                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        
                                                        <?php echo Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ); ?>

                                                        
                                                    </div>
                                                 

                                                </div>
                                                <div class="col-md-2">
                                                      
                                                 <?php echo Form::submit( 'Submit', array( 'class'=>'btn btn-success btn-flat' ) ); ?>

                                                  
                                                
                                                </div>

                                            </div>
                                        </div>
                                   <?php echo Form::close(); ?>

                                  
                            </div>
                            
                        </div> 
                    </div>
                               
                </div>
                            
            </div>
                        
        </div>
                    
        </div>
               
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('MilkViews.MilkMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>