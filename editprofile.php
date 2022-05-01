<!-- This is the page that allows users to update their informations -->

<?php
      session_start();
      $id=$_SESSION['id'];
if ($_SESSION['role']!='4'){
   header('Location:index.php');
}
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
      <?php include 'include/studentnav.php'; ?>
      
     
    <section class="content" style="margin-top:5%;">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center 
                
                <?php  
        
        if ($_SESSION['role']<='3') {
      ?>
                bg-info
                <?php }
                else{ ?>
                  bg-primary
                  <?php
                
                } ?>
                
                ">

                </div>
                <!-- /.card-header -->
                 <!-- Profile update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-success " style="margin-left:20px;">Student is successfully updated !</h3>
                  <?php     
                }

                ?>
                <!-- form start -->
                <form id="quickForm" method="post" action="config/updateprofile.php">
                  <div class="card-body">
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">First Name</label>
                      <p><?php echo $row['fname'] ?></p> 
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Middle Name</label>
                      <p><?php echo $row['mname'] ?></p>  
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Last Name</label>
                        <p><?php echo $row['sname'] ?></p>
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Form Four Index Number</label>
                        <br>
                       <p><?php echo $row['user_no'] ?></p> 
                      </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Phone number</label>
                        <input type="text" name="pnumber" class="form-control" value="<?php echo $row['pnumber'] ?>" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
              
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-lg btn-outline-primary" name="edit">Save Changes</button>
                    <a href="changepassword.php" class="btn btn-lg btn-outline-dark">Change Password</a>
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
      <footer class="footer text-center bg-dark mt-5" style="height:100px;">
        <br>
  <strong class="mt-2">Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
 
  
</footer>
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
