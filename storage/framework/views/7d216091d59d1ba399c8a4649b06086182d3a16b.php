<?php $__env->startSection('content'); ?>
 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Record
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <?php echo Form::open( array( 'route' => 'supplier.store' ) ); ?>


                                        <div class="form-group">

                                            <label>Name Of Supplyer</label>

                                            <?php echo Form::text( 'name', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Supplyer Name' ) ); ?>

                                            
                                        </div>

                                        
                                        <div class="form-group">

                                            <label>Mobile</label>

                                            <?php echo Form::text( 'mobile', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Mobile No.' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">

                                           <label>Additional Mobile </label>
                                            
                                            <?php echo Form::text( 'additional_mobile_one', null, array( 'class'=>'form-control', 'placeholder'=>'1.Enter Mobile No.' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">
                                            
                                            <?php echo Form::text( 'additional_mobile_two', null, array( 'class'=>'form-control', 'placeholder'=>'2.Enter Mobile No.' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">

                                            <label>Email</label>

                                            <?php echo Form::text( 'email', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Email Id' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">

                                            <label>Address</label>

                                            <?php echo Form::textarea( 'address', null, array( 'class'=>'form-control','placeholder'=>'Enter Address','rows'=>'3' ) ); ?>


                                        </div>

                                        
                                         <div class="form-group">

                                            <label>Account No.</label>

                                            <?php echo Form::text( 'account_no', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Bank Account No.' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">

                                            <label>Bank</label>

                                            <?php echo Form::text( 'bank_name', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Bank Name' ) ); ?>

                                            
                                        </div>


                                        <div class="form-group">

                                            <label>Branch</label>

                                            <?php echo Form::text( 'branch_name', null, array( 'class'=>'form-control', 'placeholder'=>'Enter Branch Name' ) ); ?>

                                            
                                        </div>

                                       <a href="<?php echo e(URL::previous()); ?>" class="btn btn-primary">Go Back</a>
                                        
                                        <button type="reset" class="btn btn-danger">Reset</button>

                                        <?php echo Form::submit( 'Create New', array( 'class'=>'btn btn-success' ) ); ?>

                                        
                                    <?php echo Form::close(); ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-3">
                                    
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Help text will go here
                                            </div>
                                <div class="panel-body">
                                    <p>Help text will go here</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                </div>
                                    <div class="panel-footer">
                                        Panel Footer
                                    </div>
                    </div>
                                    
                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>