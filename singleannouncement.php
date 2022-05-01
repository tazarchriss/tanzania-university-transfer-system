<!-- This is the file which views a single announcement -->

<?php
    session_start();
    include 'config/connection.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS | View Announcement</title>

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
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
 <!-- navbar section -->

 <?php 
 if ($_SESSION['role']=='2') {
   
  include 'include/tcunav.php';
?>
   
    
           
<?php
 }
 else {
  include 'include/studentnav.php';


 }
 
 
 ?>

    <!-- Main content -->
    <section class="content mt-5" style="margin:auto;">
        <div class="container-fluid">
          <div class="row" style="margin:auto;">
            <!-- left column -->
            <div class="col-md-8" style="margin:auto">
              <!-- jquery validation -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-header">
                
                    <div class="form-inline">
                        <div class="input-group" >
</div>
                      </div>
                  </div>
                    <?php
                   

                   
                    $qry="SELECT * FROM announcement WHERE announcement_id='".$_GET['id']."' ";
                    $ql=mysqli_query($conn,$qry);

                    if (mysqli_num_rows($ql) == 0){
                    echo "There is no announcement with such title !";
                      echo "<br>";


                    }

                    else{
                        $row=mysqli_fetch_array($ql);
                        $aid=$row['announcement_id'];
                    ?>
             <!-- start of announcement details -->
                  <div class="card-body ">
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" value="<?php echo $aid;?>"placeholder="Enter Announcement Title" hidden>
                    <div class="form-group">
                      <h3  class="text-primary"  class="form-control" id="exampleInputEmail1" placeholder="Enter Announcement Title"><?php echo $row['title'];?><small style="font-size:14px;" class="float-right"><?php echo $row['date'];?></small></h3>
                      <hr>
                    </div>
               
                    <div class="form-group">
                        <h4>
                        <?php echo $row['announcement'];?>
                        <br>
                        <?php echo $row['attachment']; ?>
                    </h4>
                        
                    </div>
                 
                
                    <div class="form-group">
                        
                       <img src="uploads/<?php echo $row['attachment']; ?>" alt=""> 
                    
                        
                    </div>
                
               
                  </div>
                  <!-- /.card-body -->
               
            <?php        }
                    ?>
                <?php

                    
                    ?>  
           
              </div>
              <!-- /.card -->
              

          
                    </div> 
                    </section>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" >
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <div class=""style="height:25vh;"></div>
  <footer class="footer bg-dark text-center mt-5" style="height:100px">
<br>
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
    
  </footer>
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
