<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add Medication Record</h1>
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
                        <?php echo Form::open( array( 'route'=>'cow-medicine.store', 'id'=>'form' ) ); ?>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Cow *</label>

                                <div class="col-sm-9">
                                    <select name="cow_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <?php foreach($cows as $cow): ?>
                                            <option value="<?php echo e($cow->id); ?>"><?php echo e($cow->name); ?> (C-<?php echo e($cow->id); ?>)</option>
                                        <?php endforeach; ?>
                                    </select>                                 
                                </div>

                            </div>


                            <div class="form-group">

                                <label class="col-sm-3 control-label">Medicine *</label>

                                <div class="col-sm-9">
                                
                                    <select name="medicine_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <?php foreach($medicines as $medicine): ?>
                                            <option value="<?php echo e($medicine->id); ?>"><?php echo e($medicine->name); ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                
                                </div>

                            </div>

                             <div class="form-group">

                                <label class="col-sm-3 control-label">Dose (Unit/Day)*</label>

                                <div class="col-sm-9">
                                
                                    <select name="dose" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                       
                                    </select>
                                
                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Duration ( Days )*</label>

                                <div class="col-sm-9">
                                
                                    <select name="days" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <option value="1">1 </option>
                                        <option value="2">2 </option>
                                        <option value="3">3 </option>
                                        <option value="4">4 </option>
                                        <option value="5">5 </option>
                                        <option value="6">6 </option>
                                        <option value="7">7 </option>
                                        <option value="8">8 </option>
                                        <option value="9">9 </option>
                                        <option value="10">10 </option>
                                       
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


                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('cow-medicine.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp Go Back</a>

                                    <?php echo Form::submit( '&#10004; Add New Record', array( 'class'=>'btn btn-success' ) ); ?>

                                </div>
                                        
                           </div>
                           
                            
                        <?php echo Form::close(); ?>

                    </div>
                    
                                
                    <div class="col-lg-3">
                        <div class="panel panel-primary">
	                        <div class="panel-heading">
	                            Validation Rules
	                        </div>
		                    <div class="panel-body">
		                        <p>
                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                                    All * mark fields are required.
                                </p>
                                  
		                    </div>
	                        <div class="panel-footer">
	                            Panel Footer
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