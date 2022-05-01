<!-- This is the page that allows users to update their informations -->

<?php
      session_start();
      $id=$_SESSION['id'];
if ($_SESSION['role']!='4' && $_SESSION==''){
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
  <title>STS| My Profile</title>

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
      
      <?php 
      
      if ($row['role']==1){
        include 'include/adminnav.php';  
      }
      if ($row['role']==2){
        include 'include/tcunav.php';  
      }

      if ($row['role']==3){
        include 'include/uninav.php';  
      }
       ?>
      
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"> <i class="fa fa-user-tie"></i>
            <?php 
      
      if ($row['role']==1){
      ?>
      Admin
      <?php
      }
      if ($row['role']==2){
       ?>
       TCU Officer
       <?php
      }

      if ($row['role']==3){

        ?>
University Officer
  <?php  
      }
       ?>
         </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User Profile</a></li>
              <li class="breadcrumb-item active">My Profile</li>
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
<div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column float-right" >
        <div type="radio" class="card bg-light d-flex flex-fill">
        <div class="card-header bg-primary">
             
             </div>
        <div class="card-body pt-0">
            <div class="col-12 text-left" style="margin:auto;">
            <div class="col-12 text-center">
<?php
    $usr=$row['user_id'];
                  $index=$row['user_id'];
               
                  $sql20="Select * from officer where user_id='$index'";
                  $qry20=mysqli_query($conn,$sql20);
                  $row20=mysqli_fetch_array($qry20);
                  $uid=$row20['university_id'];
                  $sql30="Select * from university where university_id='$uid'";
                  $qry30=mysqli_query($conn,$sql30);
                  $row30=mysqli_fetch_array($qry30);
                
      ?>
                  <!-- About Me Box -->
                 
                  
                    <!-- /.card-header -->
                    <div class="card-body text-left">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-square"
                             src="user.svg"
                             alt="User profile picture"
                             
                             >
                             <br>
                             <a href="profileimage.php" class="text-primary text-center" style="text-align:center;">Change Profile  Image</a>
                      </div>
      
                      <h3 class="profile-username text-center"><?php echo $row['fname'].' '. $row['mname'].' '.$row['sname']; ?></h3>
                      <p class="text-muted text-center" hidden>Software Engineer</p>
                      <br>
                      <?php  if ($row['role']==3){

?>
<strong><i class="fas fa-school mr-1"></i> Working University</strong>
      
<p class="text-muted">
<?php echo $row30['name']; ?>
</p> <?php
      } ?>
                    
                      
      
                      <hr>
                      
                      <strong><i class="fa fa-envelope mr-1"></i> Email</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger"><?php echo $row['email']; ?></span>
                       
                       
                      </p>
      
                      <hr>
                      <strong><i class="fa fa-phone-alt mr-1"></i> Phone number</strong>
      
                      <p class="text-muted">
                       
                        <span class="tag tag-success"><?php echo $row['pnumber']; ?></span>
                       
                      </p>

                    </div>
                    <div class="card-footer">
                      <a href="editstudent.php?id=<?php echo $row['user_id']; ?>" class="btn btn-outline-primary btn-block"><b>EDIT PROFILE</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                   
  
     



  </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!-- /.control-sidebar -->

  </div>
  <!-- /.content-wrapper -->
  <footer class=" text-center bg-dark">
    <strong>Copyright &copy; 2022 <a href="">TCM</a>.</strong>
  
    
  </footer>

  <!-- Control Sidebar -->
 
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
