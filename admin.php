<!-- This is the file for superadmin's home page -->
<?php
      session_start();
if ($_SESSION['role']!='1'){
   header('Location:index.php');
}
      include_once "config/connection.php";
      $sql1 = "select * from users ";
      $query1 = mysqli_query($conn, $sql1);
      $sql10="select * from university";
      $query10=mysqli_query($conn,$sql10);
      $row10=mysqli_fetch_array($query10);
      $uid=$row10['university_id'];
      $sql20="select * from selection ";
      $query20=mysqli_query($conn,$sql20);
      
      
      $sql30="select * from program";
      $query30=mysqli_query($conn,$sql30);
      
      
      $sql40="select * from users where role<4 and role!=1";
      $query40=mysqli_query($conn,$sql40);
      $sql50="select * from transfer  where status='Accepted'";
      $query50=mysqli_query($conn,$sql50);
      $universities=mysqli_num_rows($query10);
      $transfers=mysqli_num_rows($query50);
      $officers=mysqli_num_rows($query40);
      $program=mysqli_num_rows($query30);
      $selections=mysqli_num_rows($query20);
      if ($query1){
   ?>
<?php include "include/header.php"; ?>

 <?php include "include/adminnav.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary">Dashboard</h4>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <?php

                    if (mysqli_num_rows($query1) == 0){
                    echo "No users were registered !";
                      echo "<br>";

                    ?>
                    <a href="parking_registration.php">Register a parking spot</a>

                    <?php

                    }

                    else{
                      $users=mysqli_num_rows($query1);
          
                    //   $voters=mysqli_num_rows($query2);

                    //   $admins=mysqli_num_rows($query3);
            
                    //   $election=mysqli_num_rows($query4);

                    }
                    ?>
                    
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $users;?></h3>

                <p>Number Of Users</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $universities; ?></h3>

                <p>Number Of University</p>
              </div>
              <div class="icon">
                <i class="fa fa-school"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $officers; ?></h3>

                <p>Officers</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-tie"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $transfers; ?></h3>

                <p>Transfers Conducted</p>
              </div>
              <div class="icon">
                <i class="fa fa-database"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <?php
            }
             ?>
        </div>
        <!-- /.row -->
   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-center bg-dark">
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
   
    
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
