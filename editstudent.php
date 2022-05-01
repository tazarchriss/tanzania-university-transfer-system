<!-- This is the page that allows users to update their informations -->

<?php
      session_start();
      $id=$_SESSION['id'];

// Fetching user details
include 'config/connection.php';
$sql="SELECT * FROM users WHERE user_id='".$_GET['id']."'";
$qry=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($qry)

?>
<!-- start of header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS| Edit Profile</title>

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
            <h4 class="m-0 text-primary"><i class="fa fa-pen"></i> <?php echo $row['fname']." ".$row['sname'];?></h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Users</a></li>
              <li class="breadcrumb-item active">Edit User</li>
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
<div class="col-12 col-sm-12 col-md-12   d-flex align-items-stretch flex-column float-right" >
        <div type="radio" class="card bg-light d-flex flex-fill">
        <div class="card-header bg-primary">
             
             </div>
        <div class="card-body pt-0">
           <!-- /.card-header -->
                 <!-- Profile update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-success " style="margin-left:20px;">Profile is successfully updated !</h3>
                  <?php     
                }

                ?>
                <!-- form start -->
                <form id="quickForm" method="post" action="config/updateprofile.php">
                  <div class="card-body">
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="fname" name="fname" value="<?php echo $row['fname'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="mname" name="mname" value="<?php echo $row['mname'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="lname" name="lname" value="<?php echo $row['sname'] ?>"  class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Form Four Index Number</label>
                    
                        <input type="indexno" name="indexno" value="<?php echo $row['user_no'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Form Four Number">
                      </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Phone number</label>
                        <input type="text" name="pnumber" class="form-control" value="<?php echo $row['pnumber'] ?>" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
              <input type="text" name="id" value="<?php echo $row['user_id'];?>" id="" hidden>
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-lg btn-outline-primary" name="save">Save Profile</button>
                    <a href="changepassword.php" class="btn btn-lg btn-outline-dark">Change Password</a>
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
