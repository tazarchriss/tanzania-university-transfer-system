<!-- This is the page that allows students to view the list of available universities -->

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
  <title>STS | Universities</title>

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
    <!-- navbar section -->
<?php include 'include/studentnav.php'; ?>
   
        <div class="section mt-5">
          <div class="row">
              <div class="col-lg-10 col-md-10 col-sm-10" style="margin:auto;">
                  <div class="card">
                      <div class="card-header bg-primary">
                          <h4 class="text-center text-light">LIST OF AVAILABLE UNIVERSITIES</h4>
                      </div>
                      <div class="card-body">
                      <?php
                      $sql1 = "select * from university ";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "There is no post yet !";
                      echo "<br>";

                    ?>
                      <a href="parking_registration.php">Add University</a>

                    <?php

                    }

                    else{
                      ?>
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $unid=$row['university_id'];
                      $sql2="select * from program where university_id='$unid' and available>'0'";
                      $query2=mysqli_query($conn,$sql2);

                      if (mysqli_num_rows($query2)>0) {
                     
                     
                      ?>
                                
                                  <div class="col-12 text-left" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <div class="pImage col-4 float-left">
                                        <img src="uploads/university/<?php echo $row['image']; ?>" style="width:100%;height:200px;" class=" img-fluid">
                                        </div>
                                        <div class="name col-md-8 col-sm-8 float-left">
                                        <h5 class="text-primary text-left" ><?php echo $row['name'];?></h5>
                                        <p class="text-dark text-left">Postal Address : <?php echo $row['address'];?></p>
                                        <p class=" text-left">Category : <?php echo $row['category'];?></p>
                                        <p class=" text-left">Location: <?php echo $row['location'];?></p>
                                       
                                            <a href="availableprog.php?id=<?php echo $row['university_id'];?>" class="btn btn-outline-primary btn-block">View Programs</a>
                                        
                                      </div>
                                        
                                  
                    
                    </div>
                   </div>
                             <?php
                                
                            }
                        }
   # code...
  }
                                ?>
                               
                              <div class="card-footer">
                    </div>
                    <?php
                    
                     }?>


                      </div>
                  </div>
              </div>
          </div>
      </div>
      <footer class="footer bg-dark text-center mt-5" style="height:100px">
<br>
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
    
  </footer>
    </div>
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
