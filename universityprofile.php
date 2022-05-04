<?php 
    session_start();
    include('config/connection.php');
    $id=$_SESSION['id'];
 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tcu | View Universities</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Navbar section -->
    <?php
   if ($_SESSION['role']=='1') {
     include 'include/adminnav.php';
     // fetching user details

   }
   if ($_SESSION['role']=='2') {
    include 'include/tcunav.php';
  
  }

if ($_SESSION['role']=='3') {
 include 'include/uninav.php';

}
if ($_SESSION['role']=='4') {
  include 'include/studentnav.php';

 }

  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"><i class="fa fa-school"></i> Universities List</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Universities</a></li>
              <li class="breadcrumb-item active">View Universities</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
      
        <!-- /.row -->
        <div class="card-body pt-0" style="margin-top:20px;">
                    <div class="row">
                   
                        <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column" >
                            <div type="radio" class="card bg-light d-flex flex-fill">
                              <div class="card-body pt-0">
                                  <?php
                      $sql1 = "select * from university ";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "There is no post yet !";
                      echo "<br>";

                    ?>
                      <a href="">Add University</a>

                    <?php

                    }

                    else{
                      ?>
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                     
                      ?>
                                
                                  <div class="col-12 text-left" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <div class="pImage col-4 float-left">
                                        <img   src="uploads/university/<?php echo $row['image']; ?>" alt="user-avatar" class=" img-fluid" style="height:250px;width:100%">
                                        </div>
                                        <div class="name col-md-8 col-sm-8 float-left">
                                        <h5 class="text-primary text-left" ><?php echo $row['name'];?></h5>
                                        <p class="text-left">Registration Number: <?php echo $row['registration_no'];?></p>
                                        <p class="text-dark text-left">Postal Address : <?php echo $row['address'];?></p>
                                        <p class="text-dark text-left">Owner : <?php echo $row['owner'];?></p>
                                        <p class=" text-left">Category : <?php echo $row['category'];?></p>
                                        <p class="text-dark text-left">Establishment Year : <?php echo $row['establishment'];?> </p>
                                        <p class=" text-left">Location: <?php echo $row['location'];?></p>
                                       
                                            <a href="singleuni.php?id=<?php echo $row['university_id'];?>" class="btn btn-outline-primary btn-block">View</a>
                                        
                                      </div>
                                      
                                  
                    
                    </div>
                   </div>
                   <hr>
                             <?php
                                
                            }
                        }

                                ?>
                               
                              <div class="card-footer">
                    </div>
                    <?php
                    
                     }?>


                     </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center bg-dark">
    
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
   
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
