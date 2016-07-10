<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">All Users</h3>
    </div>
                
</div> 

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of All Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Name Of User</th>
                                            <th>Id</th>
                                           
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $count = 0;?>	
                                    <?php foreach( $users as $user ): ?>
										<?php $count++  ?>
                                        <tr>
                                            <td style="color:#fff; background:#9B0D07;"><?php echo e($count); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e('U-'.$user->id); ?></td>
                                           
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->created_at); ?></td>
                                           


                                            <td>
                                          
                                                <?php echo Form::open( array( 'route' => array('user.destroy', $user->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;' ) ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => 'btn btn-danger' ) ); ?>


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
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>