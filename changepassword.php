<!-- This is the file that allows users to change  their passwords -->
<?php
      session_start();
      $id=$_SESSION['id'];

// Fetching user details
include 'config/connection.php';
$sql="SELECT * FROM users WHERE user_id='$id'";
$qry=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($qry)

?>
<!-- start of header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS| Change Password</title>

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
<!-- End of header -->
<body style="background-color:whitesmoke;">
        <!-- Navbar section -->
        <?php 
           if ($_SESSION['role']=='1') {
            include 'include/adminnav.php';?>
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h4 class="m-0 text-primary"><i class="fa fa-key"></i> Change Password</h4>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
       <?php  
          }
          if ($_SESSION['role']=='2') {
           include 'include/tcunav.php';
       
         }
       
       if ($_SESSION['role']=='3') {
        include 'include/uninav.php';
        ?>
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h4 class="m-0 text-primary"><i class="fa fa-key"></i> Change Password</h4>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="admin.php">Admin</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        
       <?php  
   
       }
       if ($_SESSION['role']=='4') {
         include 'include/studentnav.php';
     
        }
       
        ?>
 
      
    <section class="content" style="margin-top:5%;">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center bg-primary">
                
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="post" action="config/passchange.php">
                  <div class="card-body">
                    <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">Current Password</label>
                        <input type="password" name="opass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                    <div class="form-group col-md-12">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                      </div>
                      <div class="form-group col-md-12">
                          <label for="exampleInputPassword1">Confirm New Password</label>
                          <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" placeholder="Connfirm New Password">
                        </div>
              
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                  <button type="submit" class="btn btn-lg btn-outline-primary btn-block" name="save">Change Password</button>
                   
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
           
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
   
        </div><!-- /.container-fluid -->
      </section> 
      <br>
      <?php  
        
        if ($_SESSION['role']<='4') {
      ?>
      <br>
        <footer class="footer text-center bg-dark" style="height:130px;">
        <br>
  <strong class="mt-2">Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
 
  
</footer>
<?php
     
       }?>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>
