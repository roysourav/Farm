<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Update Cow : <?php echo e($cow->name); ?></h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update General Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        <?php echo Form::model( $cow, array( 'method'=>'put', 'route'=> array( 'cow.update', $cow->id ),'id'=>'form','files'=>true ) ); ?>


                               
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ); ?>


                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Sex *</label>
                                
                                <div class="col-sm-9">

                                <?php echo Form::select('sex', [
                                   'female' => 'Female',
                                   'male' => 'Male',
                                   ],'female',
                                   ['class'=>'form-control','required'=> '']
                                ); ?>


                               </div>
                                            
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Color *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'color', null, array( 'class'=>'form-control','placeholder'=>'Enter Color', 'required'=> '','minlength'=>'3' ) ); ?> 

                                </div>

                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Image</label>

                                <div class="col-sm-9">

                                    <?php echo Form::file('img'); ?> 

                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Birth *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_birth', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Species *</label>

                                <div class="col-sm-9">
                                
                                   
                                    <?php echo Form::select('species_id',$species,
                                    $cow->species_id,[ 'class' => 'form-control','required'=> '']

                                    ); ?>  
                                
                                </div>

                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Cow Percentage(Seed) *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <?php echo Form::text( 'percentage', null, array( 'class'=>'form-control','placeholder'=>'Enter Percentage','required'=> '','data-parsley-type'=>'number','data-parsley-range'=>'[0, 100]' ) ); ?>


                                        <span class="input-group-addon">%</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Weight (KG) *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'weight', null, array( 'class'=>'form-control','placeholder'=>'Enter Weight in KG', 'required'=> '','data-parsley-type'=>'number') ); ?>

                                        
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Significant Sign </label>

                                <div class="col-sm-9">
                                
                                    <?php echo Form::text( 'significant_sign', null, array( 'class'=>'form-control','placeholder'=>'Enter Significant Sign (If Any)',  ) ); ?> 
                                
                                </div>

                            </div>

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Price *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        <?php echo Form::text( 'price', null, array( 'class'=>'form-control','placeholder'=>'Enter Price','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Purchase *</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_purchase', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker2','required'=> '') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Supplier *</label>

                                <div class="col-sm-9">
                                
                                   
                                    <?php echo Form::select('supplier_id',$suppliers,
                                    $cow->supplier->id,[ 'class' => 'form-control','required'=> '']

                                    ); ?>  
                                
                                </div>

                            </div>


                           <div class="form-group">

                                <label class="col-sm-3 control-label">Milking Channels </label>

                                <div class="col-sm-9">
                                
                                    

                                    <?php echo Form::select('milking_channels',[
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'],$cow->milking_channels,['class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Milking</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_milking', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker3') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                            <div class="form-group ">

                                <label class="col-sm-3 control-label">Date Of Dryness</label>

                                <div class="col-sm-9">

                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        
                                        <?php echo Form::text( 'date_of_dryness', null, array( 'class'=>'form-control pull-right', 'id' => 'datepicker4') ); ?>

                                        
                                    </div>

                                </div>

                            </div>

                           <div class="form-group m_bottom_30 ">

                                <label class="col-sm-3 control-label">Disease </label>

                                <div class="col-sm-9">
                                
                                    <?php echo Form::text( 'disease', null, array( 'class'=>'form-control','placeholder'=>'Enter disease (If Any)',  ) ); ?> 
                                
                                </div>

                            </div>         
 

                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('cow.index')); ?>" class="btn btn-primary">Go Back</a>
                                   
                                    <?php echo Form::submit( 'Update Cow', array( 'class'=>'btn btn-warning' ) ); ?>

                                </div>
                                      
                            <?php echo Form::close(); ?>

                            </div>
                    </div>
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            Log Information
	                        </div>
		                     <div class="panel-body">
                                <h5>Created At:</h5>
                                <p><?php echo Carbon\Carbon::parse($cow->created_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                <h5>Last Updated At:</h5>
                                <p><?php echo Carbon\Carbon::parse($cow->updated_at)->tz('Asia/Kolkata')->format('jS M Y , h:i A'); ?></p>
                                
                                
                            </div>
	                        <div class="panel-footer">
                                <div class="buttons">
                                    <a href="<?php echo e(route('cow.index')); ?>" class="btn btn-primary">Go Back</a>
                                    <a href="<?php echo e(route( 'cow.show', array( 'id'=> $cow->id ) )); ?>" class="btn btn-success">Show</a>
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
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>