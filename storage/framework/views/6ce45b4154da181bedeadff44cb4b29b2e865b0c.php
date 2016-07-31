<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>All Users</h1>
</section>

<?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="row">
        <div class="col-lg-12">
                    <div class="box box-info">
                        <div class="box-header">
                            List Of All Users
                        </div>
                        <!-- /.panel-heading -->
                        <div class="boxy-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
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
                                            <td><?php echo e($count); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td><?php echo e('U-'.$user->id); ?></td>
                                           
                                            <td><?php echo e($user->email); ?></td>
                                            <td><?php echo e($user->created_at); ?></td>
                                           


                                            <td>
                                          
                                                <?php echo Form::open( array( 'route' => array('user.destroy', $user->id), 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()','style' => 'display: inline;' ) ); ?>


                                                <?php echo Form::submit('Delete', array( 'class' => '' ) ); ?>


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