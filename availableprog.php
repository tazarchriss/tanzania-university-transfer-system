<!-- This file allows students to  view the list of
 programs that he/she can transfer to in a specific university -->


<?php
      session_start();
      include 'config/connection.php';
      $usr=$_SESSION['student'];
if ($_SESSION['role']!='4'){
   header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS | Programs</title>

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
              <div class="col-lg-11 col-md-11 col-sm-11" style="margin:auto;">
                  <div class="card">
                      <div class="card-header bg-primary">
                          <h4 class="text-center text-light">LIST OF AVAILABLE PROGRAMS</h4>
                      </div>
                      <div class="card-body">
                      <?php
                      $sql1 = "select * from program WHERE available!=0 and university_id='".$_GET['id']."'";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                      ?>
                    <h4 class="text-primary text-center">There is no programs to transfer to yet !</h4>
                    

                      </div>
                  </div>
              </div>
          
      
                        <div style="height:60vh;" ></div>

                    <?php

                    }

                    else{
                      ?>
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                     
                      ?>
                                
                                  <div class="col-12 text-left" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        
                                        <div class="name col-md-12 col-sm-12 col-lg-12 float-left">
                                        <h5 class="text-primary text-left" ><?php echo $row['name'];?></h5>
                                        <p class="text-dark text-left">cut-off points : <?php echo $row['points'];?></p>
                                        <p class=" text-left">Number of students Required : <?php echo $row['available'];?></p>
                                        <p class=" text-left">Minimum Requirements: <?php echo $row['requirements'];?></p>
                                       
                                            
                                        <form action="config/request.php"  method="post">
                                            <input type="text" name="student_id" value="<?php echo $_SESSION['student']; ?>" id="" hidden>
                                            <br>
                                            <input type="text" name="d_university" value="<?php echo $row['university_id']; ?>" id="" hidden>
                                            <br>
                                            <input type="text" name="d_program" value="<?php echo $row['program_id']; ?>" id="" hidden>
                                            <br>
                                             <?php 
                                
                                  
                                            $sq = "select * from transfer WHERE student_id='$usr'";
                                            $qry = mysqli_query($conn, $sq);
                                            

                                            if(mysqli_num_rows($qry)=='0'){
                                            ?>
                                            <input type="submit" class="btn btn-outline-primary float-right" name="save" value="Request Transfer">
                                            <?php
                                            }
                                            else{
                                                $choice=mysqli_fetch_array($qry);
                                                if($choice['d_program']==$row['program_id']){
                                                ?>
                                                <p class="text-success float-left <?php if($choice['status']=='Denied'){?>text-danger<?php }else{?>
                                                  text-success <?php } ?>"><span class="badge badge-primary " style="font-size:16px">Status</span> <?php echo $choice['status'];?></p>
                                                <input type="submit" class="btn btn-outline-success float-right" name="nul" value="Requested" disabled>
                                            <?php
                                                }
                                                
                                            }
                                            $choice=mysqli_fetch_array($qry);
                                            if($choice['status']=='Denied'){

                                            ?>
                                            <input type="submit" class="btn btn-success float-right" name="save" value="Request Transfer">
                                            <?php
                                            } else {
                                              ?>
                                              <?php
                                            }?>
                                        </form>
                                      </div>
                                        
                                  
                    
                    </div>
                   </div>
                             <?php
                                
                            }
                        }

                                ?>
                               
                              <div class="card-footer">
                    </div>

                    </div>
                  </div>
              </div>
          </div>
      </div>
                    <?php
                    
                     }?>


                      
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
