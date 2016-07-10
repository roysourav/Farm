<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add New Cow</h1>
    </div>
                
</div> 

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

                                <label class="col-sm-3 control-label">Seller *</label>

                                <div class="col-sm-9">
                                
                                    

                                    <?php echo Form::select('cowseller_id',$cowsellers,
                                    null,[ 'class' => 'form-control','required'=> '']

                                    ); ?> 
                                
                                </div>

                            </div>


                           <div class="form-group">

                                <label class="col-sm-3 control-label">Milking Channels *</label>

                                <div class="col-sm-9">
                              
                                <?php echo Form::select('milking_channels',[
                                    '1' => '1',
                                    '2' => '2',
                                    '3' => '3',
                                    '4' => '4'],'4',['class' => 'form-control','required'=> '']

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
                                 
                                        <a href="<?php echo e(route('cow.index')); ?>" class="btn btn-primary">Go Back</a>
                                                        
                                        <button type="reset" class="btn btn-danger">Reset All Fields</button>

                                        <?php echo Form::submit( 'Create New Cow', array( 'class'=>'btn btn-success' ) ); ?>


                               
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