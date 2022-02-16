<!-- This is the file that performs the announcement editing function -->
<?php
    session_start();
    include 'connection.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TCU | Edit Announcement</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
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
         <img src="../user.svg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"><?php echo $_SESSION['sname'].' ',$_SESSION['fname']; ?></a>
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
         <li class="nav-item menu-open">
           <a href="../tcu.php" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
               <i class="right"></i>
             </p>
           </a>
          
         </li>
         <!-- Manage Universities -->
         <li class="nav-item ">
           <a href="#" class="nav-link active">
             <i class="nav-icon fa fa-school"></i>
             <p>
               Manage University
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="../adduniversity.php" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add University</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="../universityprofile.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>View Universities</p>
               </a>
             </li>
             </ul>
             </li>
           <!-- Announcements management -->
           <li class="nav-item ">
               <a href="#" class="nav-link active">
                 <i class="nav-icon fa fa-bell"></i>
                 <p>
                   Announcements
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="../addannouncement.php" class="nav-link active">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Add Announcement</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="../editannouncement.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>Edit Announcement</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="../viewannouncement.php" class="nav-link">
                     <i class="far fa-circle nav-icon"></i>
                     <p>View Announcements</p>
                   </a>
                 </li>
               </ul>
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
               <a href="TransferRequests.html" class="nav-link active">
                 <i class="far fa-circle nav-icon"></i>
                 <p>University Transfer</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="ApprovedRequests.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Transferred Students</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="SubmittedRequests.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Denied Transfers</p>
               </a>
             </li>
           </ul>
         </li>
        
    
       
        <!-- profile management -->
        <li class="nav-item ">
           <a href="../profile.php" class="nav-link active">
             <i class="nav-icon fa fa-user"></i>
             <p>
               View Profile
          
             </p>
           </a>
         
         </li>
       <!-- logout button -->
       <li class="nav-item ">
           <a href="logout.php" class="nav-link active">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-primary">Edit Announcements</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Announcements</a></li>
              <li class="breadcrumb-item active">Edit Announcement</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin:auto;">
        <div class="container-fluid">
          <div class="row" style="margin:auto;">
            <!-- left column -->
            <div class="col-md-10" style="margin:auto">
              <!-- jquery validation -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-header">
                  <form action="" method="post">
                    <div class="form-inline">
                        <div class="input-group" >
                          <input class="form-control " type="search" name="reg" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-sidebar" name="search">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                      </div>
                  </div>
                    <?php
                    if(isset($_POST['search'])){

                    $reg=$_POST['reg'];
                    $qry="SELECT * FROM announcement WHERE title='$reg' ";
                    $ql=mysqli_query($conn,$qry);

                    if (mysqli_num_rows($ql) == 0){
                    echo "There is no announcement with such title !";
                      echo "<br>";


                    }

                    else{
                        $row=mysqli_fetch_array($ql);
                        $aid=$row['announcement_id'];
                    ?>
                <!-- form start -->
                   <!-- form start -->
                   <form id="quickForm" method="post" action="">
                  <div class="card-body ">
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?php echo $aid;?>"placeholder="Enter Announcement Title" hidden>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Announcement Title</label>
                      <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Announcement Title">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Announcement</label>
                        <textarea name="announcement" value="" class="form-control" id="" cols="30" rows="10"><?php echo $row['announcement'];?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload</label>
                        <input type="file" name="pname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    
                    </div>
                
           
                
               
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block" name="edit">SAVE ANNOUNCEMENT</button>
                  </div>
                </form>
            <?php        }
                    ?>
                <?php

                    }
                    ?>  
                    <?php 
                if (isset($_POST['edit'])) {
                    $id=$_POST['id'];
                    $title=$_POST['title'];
                    $announcement=$_POST['announcement'];
                  
                
                //    query preparation
                    $qry="UPDATE `announcement` SET `title`='$title',`announcement`='$announcement' WHERE announcement_id='$id'";
                // query execution 
                   $register=mysqli_query($conn,$qry);
                  if(!$register){
                    //   die.((mysqli_error($register));
                    echo "failed";
                    }
                
                    else
                    {
                
                   ?>
                   <br>
                   <h4 class="text-success text-center">Announcement is Successfully Updated!</h4>
                   <?php
                 }
                }
            ?>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->

          
        
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">TazarChriss</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
</body>
</html>
