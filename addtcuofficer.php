<!-- This is the file for adding tcu officer -->


<?php
      session_start();
      
if ($_SESSION['role']!='1'){
   header('Location:index.php');
}
// Fetching user details
include 'config/connection.php';


?>
<!-- start of header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS| Add Officer</title>

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
        <!-- navbar section -->
      <?php include 'include/adminnav.php'; ?>
      
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"><i class="fa fa-user-tie"></i> TCU Officer</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Users</a></li>
              <li class="breadcrumb-item active">Add Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
   <!-- This is the  file for TCU and university officers profiles -->
<br>
<div class="col-10 col-sm-10 col-md-10 d-flex align-items-stretch flex-column float-right" >
        <div type="radio" class="card bg-light d-flex flex-fill">
        <div class="card-header bg-dark">
             
             </div>
        <div class="card-body pt-0">
           <!-- /.card-header -->
                 <!-- Profile update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-success " style="margin-left:20px;">TCU Officer is successfully Added !</h3>
                  <?php     
                }

                ?>
                <!-- form start -->
                <form id="quickForm" method="post" action="config/registration.php">
                  <div class="card-body">
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="fname" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="mname" name="mname" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="lname" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Admin Type</label>
                        <select name="role" id="" style="width:100%;height:40px;">
                                      <?php
                                $sql="select * from roles where role_id<'3'";
                                $query=mysqli_query($conn,$sql);

                                if(!$query){

                                  die(mysqli_error($conn));
                                }

                                while ($result=mysqli_fetch_array($query)) {
                                  $id=$result['role_id'];
                                  $name=$result['role_name'];
                                  ?>
                              <option value="<?php echo $id; ?>">
                                <?php echo $name; ?>
                              </option>

                                  <?php


                                }

                                ?>
                                      </select>
                      </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Phone number</label>
                        <input type="text" name="pnumber" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6 float-left ">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Connfirm Password">
                      </div>
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block" name="officer2">Add Officer</button>
                 
                  </div>
                </form>
                  </div>
                  <!-- /.card -->
                   
  
     



  </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer bg-dark text-center">
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
