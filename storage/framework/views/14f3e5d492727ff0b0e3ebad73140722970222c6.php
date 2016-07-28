<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            
            <h3>Hrm Module</h3>
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

            <li class="treeview">

              <a href="#"><i class="fa fa-truck"></i> <span>Suppliers</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'supplier.index' )); ?>">View All Suppliers</a></li>
                 <li><a href="<?php echo e(route( 'supplier.create' )); ?>">Add New Supplier</a></li>
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-user-md"></i> <span>Doctors</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="<?php echo e(route( 'doctor.index' )); ?>">View All Doctors</a></li>
                <li><a href="<?php echo e(route( 'doctor.create' )); ?>">Add New Doctor</a></li>
              </ul>

            </li>


          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>