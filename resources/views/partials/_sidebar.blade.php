<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            
            
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

            <li class="treeview">
            
              <a href="#"><i class="fa fa-thumb-tack"></i> <span>Cows</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'cow.index' ) }}">View All Cows</a></li>
                <li><a href="{{ route( 'cow.create' ) }}">Add New Cow</a></li>
                <li><a href="{{ route( 'species.index' ) }}">Species</a></li>
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
            
              <a href="#"><i class="fa fa-user-md"></i> <span>Doctors</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'doctor.index' ) }}">View All Doctors</a></li>
                <li><a href="{{ route( 'doctor.create' ) }}">Add New Doctor</a></li>
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-paw"></i> <span>Reproduction</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'reproduction.index' ) }}">Reproduction</a></li>
                <li><a href="{{ route( 'reproduction.create' ) }}">Add New Record</a></li>
              </ul>

            </li>
            
            <li class="treeview">
            
              <a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Death Register</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'dead-cow.index' ) }}">All Records</a></li>
                <li><a href="{{ route( 'dead-cow.create' ) }}">Add New Record</a></li>
              </ul>

            </li>
            
            <li class="treeview">
            
              <a href="#"><i class="fa fa-thumbs-down"></i> <span>Cow Sell Register</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'sell-cow.index' ) }}">All Records</a></li>
                <li><a href="{{ route( 'sell-cow.create' ) }}">Add New Record</a></li>
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-medkit"></i> <span>Vaccination</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'vaccine.index' ) }}">All Vaccine</a></li>
                <li><a href="{{ route( 'vaccine.create' ) }}">Add New Vaccine</a></li>
                <li><a href="{{ route( 'cow-vaccine.index' ) }}">All Records</a></li>
                <li><a href="{{ route( 'cow-vaccine.create' ) }}">Add New Record</a></li>
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-user"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                <li><a href="{{ route( 'user.index' ) }}">View All Users</a></li>
                <li><a href="{{ route( 'register' ) }}">Register New User</a></li>
              </ul>

            </li>

          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>