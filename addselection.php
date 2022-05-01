<!-- This is the file that allows university to add the list of students selected -->

<?php
      session_start();
     
if ($_SESSION['role']!='3'){
   header('Location:index.php');
}
      include_once "config/connection.php";
    //   $sql1 = "select * from users ";
    //   $query1 = mysqli_query($conn, $sql1);
 
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS | Add Selection</title>

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
            <h4 class="m-0 text-primary"><i class="fa fa-user"></i> Add Selection</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Selection</a></li>
              <li class="breadcrumb-item active">Add Selection</li>
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
              
              <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    
                  </div>
                  <?php
                  if (isset($_GET["success"])){
                  ?>
                <h6 class="text-primary float-left " style="margin-left:20px;">Selection is  successfully added !</h6>
                  <?php     
                }

                ?>
                <br>
                <!-- form start -->
                <form id="quickForm" method="post" action="config/addselection.php">
                  <div class="card-body ">
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" name="mname" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Form Four Index Number</label>
                      <input type="text" name="index" class="form-control" id="exampleInputEmail1" placeholder="Enter Form Four index number">
                    </div>
                      
                    <div class="form-group">
                                      <label for="exampleInputEmail1">Program</label>
                                      <select name="program" class="bg-primary" style="width:100%;height:40px;">
                                      <?php
                                 $user=$_SESSION['id'];
                                 $sql5="select * from officer WHERE user_id='$user'";
                                 $query5=mysqli_query($conn,$sql5);
                                 $uni=mysqli_fetch_array($query5);
                                 $pid=$uni['university_id'];
                                $sql="select * from program WHERE university_id='$pid'";
                                $query=mysqli_query($conn,$sql);

                                if(!$query){

                                  die(mysqli_error($query));
                                }

                                while ($result=mysqli_fetch_array($query)) {
                                    $id=$result['program_id'];
                                  $name=$result['name'];
                                  ?>
                              <option value="<?php echo $id; ?>">
                                <?php echo $name; ?>
                              </option>

                                  <?php


                                }

                                ?>
                                      </select>
                                      <input type="text" name="university" hidden value="<?php echo $uni['university_id']; ?>" >
                                  </div>
                    
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="add">Add Selection</button>
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

  <footer class="main-footer text-center bg-dark" >
        
  <strong class="mt-2">Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
 
  
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
