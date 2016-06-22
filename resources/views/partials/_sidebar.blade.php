<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">

            <li class="header">HEADER</li>
            

            <li class="treeview">

              <a href="#"><i class="fa fa-user"></i> <span>Employees</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'employee.index' ) }}">All Employees</a></li>
                <li><a href="{{ route( 'employee.create' ) }}">Add New Employee</a></li>
              </ul>

            </li>

            <li class="treeview">

              <a href="#"><i class="fa fa-truck"></i> <span>Suppliers</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'supplier.index' ) }}">View All Suppliers</a></li>
                 <li><a href="{{ route( 'supplier.create' ) }}">Add New Supplier</a></li>
              </ul>

            </li>


            <li class="treeview">

              <a href="#"><i class="fa fa-shopping-cart"></i> <span>Customers</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'customer.index' ) }}">View All Customers</a></li>
                <li><a href="{{ route( 'customer.create' ) }}">Add New Customers</a></li>
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-thumb-tack"></i> <span>Cows</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'cow.index' ) }}">View All Cows</a></li>
                <li><a href="{{ route( 'cow.create' ) }}">Add New Cow</a></li>
              </ul>

            </li>


            <li class="treeview">
            
              <a href="#"><i class="fa fa-male"></i> <span>Cow Sellers</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'cowseller.index' ) }}">View All Cow Sellers</a></li>
                <li><a href="{{ route( 'cowseller.create' ) }}">Add New Cow Seller</a></li>
              </ul>

            </li>


            <li class="treeview">
            
              <a href="#"><i class="fa fa-smile-o"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'user.index' ) }}">View All Users</a></li>
                <li><a href="{{ route( 'register' ) }}">Register New User</a></li>
              </ul>

            </li>

          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>