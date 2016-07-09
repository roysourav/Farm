<?php if( Session::has('success') ): ?>

<div class="alert alert-success">
  <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

<?php if( Session::has('error') ): ?>

	<div class="alert alert-danger">
		<strong>Error!</strong> <?php echo e(Session::get('error')); ?>

	</div>
<?php endif; ?>

<?php if( count($errors) > 0 ): ?>
	<div class="alert alert-danger">
   
  	<ul>
  		<strong><h3>Please Fix These Error!</h3></strong>
  		<?php foreach( $errors->all() as $error ): ?>
  		<li><?php echo e($error); ?></li>
	  	<?php endforeach; ?>
  	</ul>
	  
</div>
<?php endif; ?>
