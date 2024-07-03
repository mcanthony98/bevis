<?php 
$sord = "SELECT * FROM orders WHERE order_status=1";
$sores = $conn->query($sord);
if($sores->num_rows == 0){
	$pendingnum = "";
}else{
	$pendingnum = $sores->num_rows;
}
?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../assets/images/kiliki-favicon.png" alt="Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN PANEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['chname'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="orders.php" class="nav-link <?php if ($sdpg==2){ echo "active";}?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Orders
				<span class="badge badge-success right"><?php echo $pendingnum;?></span>
              </p>
            </a>
          </li>
          <li class="nav-header">MANAGE STORE</li>
          <li class="nav-item">
            <a href="products.php" class="nav-link <?php if ($sdpg==4){ echo "active";}?>">
              <i class="nav-icon fa fa-store"></i>
              <p>
                Products
              </p>
            </a>
          </li>
		      <li class="nav-item">
            <a href="categories.php" class="nav-link <?php if ($sdpg==5){ echo "active";}?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
		  
		      <li class="nav-item">
            <a href="transactions.php" class="nav-link <?php if ($sdpg==9){ echo "active";}?>">
              <i class="nav-icon fa fa-barcode"></i>
              <p>
                Transactions
              </p>
            </a>
          </li> 
          <li class="nav-header">MANAGE WEBSITE</li>
          <li class="nav-item">
            <a href="services.php" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="specialisms.php" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="insights.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Blogs
              </p>
            </a>
          </li>
          
          <li class="nav-header">My Clients</li>
          
		      <li class="nav-item">
            <a href="customers.php" class="nav-link <?php if ($sdpg==3){ echo "active";}?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="leads.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Form Leads
              </p>
            </a>
          </li>

        

          

          

         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <div class="bottom">
      <a href="processes.php?logout" class="btn btn-info text-white btn-block">
              <i class="nav-icon fas fa-sign-out-alt"></i>
             
                Logout
            </a>
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>