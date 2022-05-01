<!-- This is the page  for the inteface of editing  a program  -->
<?php
      session_start();
      include 'config/connection.php';
if ($_SESSION['role']!='3'){
   header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tcu | Edit University</title>

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
<body class="hold-transition sidebar-mini layout-fixed">

<!-- navbar section -->
<?php include 'include/uninav.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"><i class="fa fa-pen"></i> Edit Program
            </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Programs</a></li>
              <li class="breadcrumb-item active">Edit Program</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="margin:auto;">
        <div class="container-fluid">
          <div class="row" style="margin:auto;">
            <!-- left column -->
            <div class="col-md-10" style="margin:auto">
              <!-- jquery validation -->
              <div class="card card-primary">
                <!-- /.card-header -->
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <div class="col-md-3">
                   
                      </div>
                  </div>
                         
                  <?php     
                
                // Fetching programme details
                $sql1 = "select * from program WHERE program_id='".$_GET['id']."'";
                $qry1 = mysqli_query($conn, $sql1);

                $row=mysqli_fetch_array($qry1);
                $id=$row['program_id'];
                ?>
                <!-- form start -->
              <!-- form start -->
              <form id="quickForm" method="post" action="">
                  <div class="card-body ">
                  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Program Name</label>
                      <input type="text" value="<?php echo $row['name'];?>" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Program name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Program Code</label>
                      <input type="text" value="<?php echo $row['code'];?>" name="code" class="form-control" id="exampleInputEmail1" placeholder="Enter Program code">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Minimum Entry Points</label>
                      <input type="text" value="<?php echo $row['points'];?>" name="points" class="form-control" id="exampleInputEmail1" placeholder="Enter Minimum Entry Points">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Capacity</label>
                        <input type="text" value="<?php echo $row['capacity'];?>" name="capacity" class="form-control" id="exampleInputEmail1" placeholder="Enter Program Capacity">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Number of Students To Transfer To</label>
                        <input type="text" name="available" value="<?php echo $row['available'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Number of Students required to transfer to">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select name="level" class="bg-primary" style="width:100%;height:40px;">
                        <option value="<?php echo $row['level'];?>"><?php echo $row['level'];?></option>
                          <option value="Certificate">Certificate</option>
                          <option value="Diploma">Diploma</option>
                          <option value="Bachelor">Bachelor</option>
                          <option value="Masters">Masters</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Duration(Year)</label>
                        <select name="year" class="bg-primary" id="exampleInputEmail1" style="width:100%;height:40px;">
                            <option value="<?php echo $row['year'];?>"><?php echo $row['year'];?></option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Minimum Requirements</label>
                         <textarea name="requirements" value=""  class="form-control" id="exampleInputEmail1" placeholder="Enter minimumm requirements" cols="20" rows="5"><?php echo $row['requirements'];?></textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="edit"> Save </button>
                  </div>
                </form>
            
                    <?php 
                if (isset($_POST['edit'])) {
                  $name=$_POST['name'];
                  $code=$_POST['code'];
                  $points=$_POST['points'];
                  $capacity=$_POST['capacity'];
                  $available=$_POST['available'];
                  $level=$_POST['level'];
                  $year=$_POST['year'];
                  $requirements=$_POST['requirements'];
                  $user_id=$_SESSION['id'];
                
                  // Fetching university details
                  $sql1="SELECT * FROM officer WHERE user_id='$user_id'";
                  $qry1=mysqli_query($conn,$sql1);
                  $uni=mysqli_fetch_array($qry1);
                  $university_id=$uni['university_id'];
               
                
                //    query preparation
                    $qry="UPDATE `program` SET `name`='$name',`code`='$code',`points`='$points',`year`='$year',`capacity`='$capacity',`available`='$available',`level`='$level',`university_id`='$university_id' WHERE program_id='$id'";
                // query execution 
                   $register=mysqli_query($conn,$qry);
                  if(!$register){
                      // die(mysqli_error($conn));
                    echo "failed";
                    }
                
                    else
                    {
                  
                   ?>
                   <br>

          
                   <h5 class="text-success text-center">Program is Successfully Updated!</h5>
                   <?php
                 }
                }
            ?>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
        
          </div>
          <!-- /.row -->
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
