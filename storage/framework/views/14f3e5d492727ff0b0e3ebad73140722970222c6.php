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
            
              <a href="#"><i class="fa fa-medkit"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'employee.index' )); ?>">All Employees</a></li>
                <li><a href="<?php echo e(route( 'employee.create' )); ?>">Add New Employee</a></li>
                
              </ul>

            </li>


            <li class="treeview">

              <a href="#"><i class="fa fa-shopping-cart"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'customer.index' )); ?>">View All Customers</a></li>
                <li><a href="<?php echo e(route( 'customer.create' )); ?>">Add New Customers</a></li>
              </ul>

            </li>


          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>