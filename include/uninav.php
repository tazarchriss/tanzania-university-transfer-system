<!-- This is the file for university transfer navbar -->
  <!-- Navbar -->
  <div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['fname']." ".$_SESSION['mname'];?></a>
        </div>
      </div>

  
      <!-- Sidebar Menu -->
      <nav class="mt-2" style="height:100vh;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="university.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right"></i>
              </p>
            </a>
           
          </li>
          <!-- Managing Transfer requests -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-download"></i>
              <p>
                Manage Transfers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="TransferRequests.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Requests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ApprovedRequests.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accepted Requests</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="deniedtransfers.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Denied Requests</p>
                </a>
              </li>
         
            </ul>
          </li>
         
          <!-- Adding vacancy programs -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Manage Programs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addprogram.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="viewprogram.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Programs</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Selection management -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-bell"></i>
              <p>
               Manage Selection
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="addselection.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Selection</p>
                </a>
              </li>
         
              <li class="nav-item">
                <a href="viewselections.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Selection</p>
                </a>
              </li>
            </ul>
          </li>
        <!-- University profile management -->
         <li class="nav-item ">
            <a href="uniprofile.php" class="nav-link active">
              <i class="nav-icon fa fa-school"></i>
              <p>
                University Profile
           
              </p>
            </a>
          
          </li>
         <!-- profile management -->
         <li class="nav-item ">
            <a href="officerprofile.php" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                My Profile
           
              </p>
            </a>
          
          </li>
        <!-- logout button -->
        <li class="nav-item ">
            <a href="config/logout.php" class="nav-link active">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Log Out
              
              </p>
            </a>
            
          </li>
         
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
