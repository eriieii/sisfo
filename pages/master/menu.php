 <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">
          <?php
            $hari_ini=date('l, d-m-Y');
            echo $hari_ini;
          
          ?>
        </li>
	        <li >
	          <a href="index.php">
	            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
	          
	          </a>
	         
	        </li>

        <li >
          <a href="index.php?page=supplier">
            <i class="fa fa-files-o"></i>
            <span>Data Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

        <li >
          <a href="index.php?page=distributor">
            <i class="fa fa-files-o"></i>
            <span>Data Distributor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

          <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Retail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>

       
      </ul>
    </section>
    <!-- /.sidebar -->