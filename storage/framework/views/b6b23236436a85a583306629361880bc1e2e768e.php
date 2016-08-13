<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Reproduction Record</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        <?php echo Form::model( $distribution, array( 'method'=>'put', 'route'=> array( 'distribution.update', $distribution->id ),'id'=>'form' ) ); ?>


                             <div class="form-group">

                                            <label class="col-sm-3 control-label">Name Of Customer *</label>

                                            <div class="col-sm-9">

                                                <select name="customer_id" class="form-control" required="">
                                                    <option  value="" selected="Please Select">Please Select</option>
                                                    <?php foreach( $customers as $customer ): ?>
                                                        <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?></option>
                                                    <?php endforeach; ?>
                                                </select> 
                                            
                                            </div>

                                        </div>



                                       <div class="form-group ">

                                            <label class="col-sm-3 control-label">Date *</label>

                                            <div class="col-sm-9">

                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                    
                                                    <?php echo Form::text( 'date', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ); ?>

                                                    
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Price Per Ltr. *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <span class="input-group-addon">Tk:</span>
                                                    
                                                    <?php echo Form::text( 'price', null, array( 'class'=>'form-control','placeholder'=>'Enter Price Per Ltr.','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                                    <span class="input-group-addon">.00</span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Morning (In Ltr.) *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <?php echo Form::text( 'morning', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                                         <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Evening (In Ltr.) *</label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <?php echo Form::text( 'evening', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group m_bottom_30">
                                            <label class="col-sm-3 control-label">Waste ( If Any ) </label> 
                                        
                                        
                                            <div class="col-sm-9">

                                                <div class=" input-group">

                                                    <?php echo Form::text( 'waste', null, array( 'class'=>'form-control','placeholder'=>'Enter Value In Ltr.','data-parsley-type'=>'number' ) ); ?>


                                                    <span class="input-group-addon">Ltr.</span>

                                                </div>

                                            </div>
                                        </div>

                           

                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('distribution.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> &nbsp Go Back</a>
                                    
                                    <?php echo Form::submit( 'Update Record', array( 'class'=>'btn btn-warning' ) ); ?>

                                </div> 
                                        
                           </div>
                           
                            
                        <?php echo Form::close(); ?>

                    </div>
                    
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Log Information
                            </div>
                             <div class="panel-body">
                                <h5>Created At:</h5>
                                <p><?php echo Carbon\Carbon::parse($distribution->created_at)->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($distribution->updated_at)->format('jS M Y , h:i A'); ?></p>
                                
                                
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