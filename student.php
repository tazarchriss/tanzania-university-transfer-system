<!-- This is the  file for student's home page -->

<?php
      session_start();
      include 'config/connection.php';
if ($_SESSION['role']!='4'){
   header('Location:index.php');
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS | Home</title>

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
<body class="bg-light">
 <?php include 'include/studentnav.php';
 ?>
<!-- User welcome note-->
<div class="welcome col-sm-10 col-md-10 col-lg-10" style="margin:auto;">
  <h4 class="mt-5  text-primary">Welcome      <?php    echo   $_SESSION['sname'].' '.$_SESSION['fname'];
          ?> </h4>
</div>
    <!-- Start of home panels -->
    <div class="section" style="margin:auto;margin-top:5%;">

        <div class="row col-sm-10 col-md-10 col-lg-10" style="margin:auto;">
            <!-- user profile panel -->
            <div class="col-lg-4 col-sm-4 col-md-4 float-left">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h5>My Profile</h5>
    
                    <p><?php echo $_SESSION['fname'].' '.$_SESSION['mname'].' '.$_SESSION['sname'];?></p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-user-tie text-light"></i>
                  </div>
                  <a href="profile.php" class="small-box-footer"> open <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- university vacancy panel -->
                <div class="col-lg-4 col-sm-4 col-md-4  float-left">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                      <div class="inner">
                        <h5>universities</h5>
        
                        <p >00</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-school text-light"></i>
                      </div>
                      <a href="AvailableUniversities.php" class="small-box-footer"> open <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

            <!-- start of request panel -->
            <div class="col-lg-4 col-sm-4 col-md-4  float-left">
                <!-- small box -->
                <div class="small-box bg-primary">
                  <div class="inner">
                    <h5>Request Transfer</h5>
    
                    <p >status</p>
                  </div>
                  <div class="icon">
                    <i class="fa fa-download text-light"></i>
                  </div>
                  <a href="#" class="small-box-footer"> open <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
        </div>
        <!-- announcement section -->
        <?php
          $sql1="SELECT * FROM announcement";
          $qry1=mysqli_query($conn,$sql1);
        
          ?>
        <div class="section">
          <div class="row">
              <div class="col-lg-10 col-md-10 col-sm-10" style="margin:auto;">
                  <div class="card">
                      <div class="card-header bg-dark">
                          <h5 class="text-left text-light"> <i class="fa fa-bell"></i> Announcements</h5>
                      </div>
                      <div class="card-body">
                        <?php 
                            for ($i=1; $i<=mysqli_num_rows($qry1); $i++){
                              $row = mysqli_fetch_array($qry1);
                              

                          ?>
                          <a href="singleannouncement.php?id=<?php echo $row['announcement_id'];?>" style="font-size:20px;"> <span class="badge badge-danger badge-big">New</span> <?php echo $row['title'] ; ?>    <small style="font-size:14px;" class="float-right"><?php echo $row['date'];?></small> </a>
                       
                      <br>
                      <?php
                            }
                            ?>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  
    </div>
    
    <?php include 'include/footer.php';
 ?>
    <!-- End of home panels -->
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
