<?php echo $__env->make( 'partials._header' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make( 'MilkViews._MilkSidebar' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Main content -->
   <section class="content">

            <?php echo $__env->yieldContent('content'); ?>

 </section><!-- /.content -->
        

</div><!-- /.content-wrapper -->
    

 <?php echo $__env->make( 'partials._footer' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>