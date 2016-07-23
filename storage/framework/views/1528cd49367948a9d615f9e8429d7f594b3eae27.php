<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            
            
          </div>

         

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">

          <li class="treeview">
            
              <a href="<?php echo e(route('home')); ?>"><i class="fa fa-tachometer"></i> <span>Dashbord</span> <i class="fa fa-angle-left pull-right"></i></a>

            </li>

            


            <li class="treeview">
            
              <a href="#"><i class="fa fa-medkit"></i> <span>Vaccine</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'vaccine.index' )); ?>">All Vaccine</a></li>
                <li><a href="<?php echo e(route( 'vaccine.create' )); ?>">Add New Vaccine</a></li>
                
              </ul>

            </li>

             <li class="treeview">
            
              <a href="#"><i class="fa fa-thumb-tack"></i> <span>Medicines</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'medicine.create' )); ?>">Add New Medicine</a></li>
                <li><a href="<?php echo e(route( 'medicine.index' )); ?>">All Medicines</a></li>
                <li><a href="<?php echo e(route( 'medicine-category.index' )); ?>">Medicine Category</a></li>
              </ul>

            </li>

            

          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>