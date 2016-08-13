<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            
            <h3>Milk Module</h3>
          </div>

         

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">

          <li class="treeview">
            
              <a href="<?php echo e(route('home')); ?>"><i class="fa fa-tachometer"></i> <span>Dashbord</span> <i class="fa fa-angle-left pull-right"></i></a>

            </li>

            


            <li class="treeview">
            
              <a href="#"><i class="fa fa-medkit"></i> <span>Milking</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                
                <li><a href="<?php echo e(route( 'milk.index' )); ?>">All Record</a></li>
                <li><a href="<?php echo e(route( 'milk.date.get' )); ?>">Add Record</a></li>
                
              </ul>

            </li>

            <li class="treeview">
            
              <a href="#"><i class="fa fa-medkit"></i> <span>Distribution</span> <i class="fa fa-angle-left pull-right"></i></a>

              <ul class="treeview-menu">
                
                <li><a href="<?php echo e(route( 'distribution.index' )); ?>">All Record</a></li>
                <li><a href="<?php echo e(route( 'distribution.create' )); ?>">Add Record</a></li>
                
              </ul>

            </li>



          </ul><!-- /.sidebar-menu -->

        </section>
        <!-- /.sidebar -->
      </aside>