<!-- This is the file that allows universities to add programs -->
<?php
      session_start();
if ($_SESSION['role']!='3'){
   header('Location:index.php');
}
      include_once "config/connection.php";
      $sql1 = "select * from users ";
      $query1 = mysqli_query($conn, $sql1);
 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

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
 <?php include 'include/uninav.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"><i class="fa fa-book"></i> Add Program</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Programs</a></li>
              <li class="breadcrumb-item active">Add Program</li>
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
                                       <!-- program adding success message -->
                      <?php
                  if (isset($_GET["success"])){
                  ?>
                <h6 class="text-primary " style="margin-left:20px;">Program is  successfully added !</h6>
                  <?php     
                }
              ?>
              <div class="card card-primary">
                <!-- /.card-header -->
              
  
                <div class="card-header">
                    <h3 class="card-title"></h3>
                  
                  
                  </div>
                
                <!-- form start -->
                <form id="quickForm" method="post" action="config/addprogram.php">
                  <div class="card-body ">
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Program Name</label>
                      <input type="text" name="pname" class="form-control" id="exampleInputEmail1" placeholder="Enter Program name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Program Code</label>
                      <input type="text" name="code" class="form-control" id="exampleInputEmail1" placeholder="Enter Program code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Minimum Entry Points</label>
                      <input type="text" name="points" class="form-control" id="exampleInputEmail1" placeholder="Enter Minimum Entry Points">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Capacity</label>
                        <input type="text" name="capacity" class="form-control" id="exampleInputEmail1" placeholder="Enter Program Capacity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Number of Students To Transfer To</label>
                        <input type="text" name="available" class="form-control" id="exampleInputEmail1" placeholder="Enter Number of Students required to transfer to">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select name="level" class="bg-primary" style="width:100%;height:40px;">
                          <option value="Certificate">Certificate</option>
                          <option value="Diploma">Diploma</option>
                          <option value="Bachelor">Bachelor</option>
                          <option value="Masters">Masters</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration(Year)</label>
                        <select name="year" class="bg-primary" style="width:100%;height:40px;">
                            <option value="1">1</option>    
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Minimum Requirements</label>
                         <textarea name="requirements"  class="form-control" id="exampleInputEmail1" placeholder="Enter minimumm requirements" cols="20" rows="5"></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="add">Add Program</button>
                  </div>
                </form>
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
  <footer class="main-footer text-center bg-dark">
    <strong>Copyright &copy; 2022 <a href="">TCM</a>.</strong>
    
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
