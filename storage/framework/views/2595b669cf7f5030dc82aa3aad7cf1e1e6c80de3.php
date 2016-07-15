<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Medicine</h1>
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
                        <?php echo Form::open( array( 'route'=>'medicine.store', 'id'=>'form' ) ); ?>



                            <div class="form-group">

                                <label class="col-sm-3 control-label">Name Of Medicine *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Medicine Name', 'required'=> '' ) ); ?>


                                </div>

                            </div>

                            
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Medicine Category *</label>

                                <div class="col-sm-9">
                                
                                    <select name="cat_id" class="form-control" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <?php foreach($medicine_categories as $category): ?>
                                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>

                            </div>
                           

                            <div class="form-group m_bottom_30">
                                <label class="col-sm-3 control-label">Cost Per Unit *</label> 
                            
                            
                                <div class="col-sm-9">

                                    <div class=" input-group">

                                        <span class="input-group-addon">Tk:</span>
                                        
                                        <?php echo Form::text( 'cost', null, array( 'class'=>'form-control','placeholder'=>'Enter Cost Per Dose','required'=> '','data-parsley-type'=>'number' ) ); ?>


                                        <span class="input-group-addon">.00</span>

                                    </div>

                                </div>
                            </div>

                            
                           
                            <div class="col-sm-3"></div>

                            <div class="col-sm-9">
                                <div class="buttons">
                                    <a href="<?php echo e(route('medicine.index')); ?>" class="btn btn-primary">Go Back</a>
                                            
                                        <?php echo Form::submit( 'Add New Medicine', array( 'class'=>'btn btn-success' ) ); ?>

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