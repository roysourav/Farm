<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Add New Cow</h1>
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
                        <?php echo Form::open( array( 'route'=>'cow.store', 'id'=>'form', 'files'=> true ) ); ?>


                           <div class="form-group">

                                <label class="col-sm-3 control-label">Name *</label>

                                <div class="col-sm-9">

                                    <?php echo Form::text( 'name', null, array( 'class'=>'form-control','placeholder'=>'Enter Name', 'required'=> '','minlength'=>'3' ) ); ?>


                                </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Image</label>

                                    <div class="col-sm-9">
                                        <?php echo e(Html::image('/images/avater.jpg', null, array('id' => 'preview-container','class' => 'img-responsive img-thumbnail'))); ?>

                                        <?php echo Form::file('img', ['id' =>'imgInp'] ); ?>


                                    </div>

                            </div>

                            <div class="form-group">

                                <label class="col-sm-3 control-label">Sex *</label>
                                
                                <div class="col-sm-9">

                                <?php echo Form::select('sex', [
                                   'Female' => 'Female',
                                   'Male' => 'Male',
                                   ],'Female',
                                   ['class'=>'form-control select','required'=> '']
                                ); ?>


                               </div>
                                            
                            </div>
                           
                            <div class="form-group">

                                <label class="col-sm-3 control-label">Color *</label>

                                <div class="col-sm-9">
                                
                                    <select name="color" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <option value="White">White</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Black">Black</option>
                                        <option value="Red">Red</option>
                                        <option value="Gray">Gray</option>
                                        <option value="Cream">Cream</option>
                                    </select>

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
                                
                                    <select name="species_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <?php foreach($species as $spec): ?>
                                            <option value="<?php echo e($spec->id); ?>"><?php echo e($spec->name); ?></option>
                                        <?php endforeach; ?>
                                    </select>

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

                                    <select name="supplier_id" class="form-control select" required="">
                                        <option  value="" selected="Please Select">Please Select</option>
                                        <?php foreach($suppliers as $supplier): ?>
                                            <option value="<?php echo e($supplier->id); ?>"><?php echo e($supplier->name); ?></option>
                                        <?php endforeach; ?>
                                    </select>


                                </div>

                            </div>

                           <div class="form-group">

                                <label class="col-sm-3 control-label">Milking Channels *</label>

                                <div class="col-sm-9">
                              
                                <?php echo Form::select('milking_channels',[
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'],'4',['class' => 'form-control select','required'=> '']

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
                                    <a href="<?php echo e(route('cow.index')); ?>" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i>&nbsp Go Back</a>
                                                        
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Reset All Fields</button>

                                        <?php echo Form::submit( '&#10004; Create New Cow', array( 'class'=>'btn btn-success', 'i class'=>'fa fa-check', 'aria-hidden'=>'true' ) ); ?>

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