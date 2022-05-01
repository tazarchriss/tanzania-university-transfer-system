<!-- This is the page that allows users to update their informations -->

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
  <title>STS| Edit Student</title>

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
      <?php include 'include/studentnav.php'; ?>
      
     
    <section class="content" style="margin-top:5%;">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center bg-dark">
                  <h3 class="card-title text-light text-bold" style="text-align: center;"> <i> STS</i></h3>
                </div>
                <!-- /.card-header -->
                 <!-- Profile update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-primary " style="margin-left:20px;">Profile Image is successfully updated !</h3>
                  <?php     
                }

                ?>
                <!-- form start -->
                <form id="quickForm" method="post" action="config/uploadimg.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Select Image</label>
                        <input type="file" name="file"  class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    </div>
                   
              
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-lg btn-outline-primary" name="upload"><i class="fa fa-download"></i> Upload Profile Image</button>

                  </div>
            </form>
                <!-- upload mechanism -->
           

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
