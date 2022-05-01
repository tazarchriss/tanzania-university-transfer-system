<!-- This is the page  for the inteface of editing an university  -->
<?php
      session_start();
      include 'config/connection.php';

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
<?php 
if ($_SESSION['role']=='1'){
  include 'include/adminnav.php';
}
if ($_SESSION['role']=='2') {
  include 'include/tcunav.php';
}
if ($_SESSION['role']=='3') {
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
            <h4 class="m-0 text-primary"><i class="fa fa-pen"></i> Edit University
            </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage University</a></li>
              <li class="breadcrumb-item active">Edit University</li>
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
                                <!-- university update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-success " style="margin-left:20px;">university is  successfully added !</h3>
                  <?php     
                }
                // Fetching university details
                $sql1 = "select * from university WHERE university_id='".$_GET['id']."'";
                $qry1 = mysqli_query($conn, $sql1);

                $row=mysqli_fetch_array($qry1);
                ?>
                <!-- form start -->
                <form id="quickForm" method="post" action="" enctype="multipart/form-data">
                  <div class="card-body ">
                  <input type="text" name="id" value="<?php echo $row['university_id'];?>" hidden class="form-control" id="exampleInputEmail1" placeholder="Enter University Name">
                    <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                      <label for="exampleInputEmail1">University Name</label>
                      <input type="text" name="uname" value="<?php echo $row['name'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter University Name">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                        <label for="exampleInputEmail1">University Address</label>
                        <input type="text" name="uaddress" value="<?php echo $row['address'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter University Address">
                  </div>
                    <!-- <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                      <label for="exampleInputEmail1">University Email</label>
                      <input type="text" name="umail"  value="<?php echo $row['email'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter University Email">
                    </div> -->
                    <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                        <label for="exampleInputEmail1">University Owner</label>
                        <input type="text" name="owner" value="<?php echo $row['owner'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter University Owner">
                      </div>
                      <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                        <label for="exampleInputEmail1">Establishment Year</label>
                        <input type="text" name="year" value="<?php echo $row['establishment'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Establishment Year">
                      </div>
                         <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                      <label for="exampleInputEmail1">Category</label>
                      <select name="category" class="form-control bg-primary" id="exampleInputEmail1">
                      <option  value="<?php echo $row['category'];?>" > <?php echo $row['category'];?></option>
                          <option value="public University">Public University</option>
                          <option value="private University">Private University</option>
                      </select>
         
                    </div>
                      <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                        <label for="exampleInputEmail1">Registration No</label>
                        <input type="text" name="regno"  value="<?php echo $row['registration_no'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Registration Number">
                      </div>
                      <div class="form-group col-md-6 col-sm-6 col-lg-6 float-left">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" name="location"  value="<?php echo $row['location'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter University Location">
                      </div>
                      <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Select Logo</label>
                        <input type="file" name="file"  class="form-control" id="exampleInputEmail1" value="<?php echo $row['image'];?>">
                    </div>
                   
                 
                    <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Upload</label>
                        <input type="file" name="pname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    
                    </div>
                 -->
           
                
               
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-block" name="edit">Save</button>
                  </div>
                </form>

  
            
                    <?php 
                if (isset($_POST['edit'])) {
                    $id=$_POST['id'];
                    $uname=$_POST['uname'];
                    $uaddress=$_POST['uaddress'];
                    // $umail=$_POST['umail'];
                    $owner=$_POST['owner'];
                    $year=$_POST['year'];
                    $category=$_POST['category'];
                    $regno=$_POST['regno'];
                    $location=$_POST['location'];
                    $file=$_FILES['file'];
                   
                    $fileName=$_FILES['file']['name'];
                    $fileTmpName=$_FILES['file']['tmp_name'];
                    $fileSize=$_FILES['file']['size'];
                    $fileError=$_FILES['file']['error'];
                
                    $fileExt=explode('.',$fileName);
                    $fileActualExt=strtolower(end($fileExt));
                
                    $allowed=array('jpg','jpeg','png','pdf');
                    if(in_array($fileActualExt,$allowed)){
                        if ($fileError===0) {
                            if ($fileSize<10000000) {
                                $fileNameNew=uniqid('',true).".".$fileActualExt;
                                $fileDestination='uploads/university/'.$fileNameNew;

                
                          // query preparation
                            $qry="UPDATE `university` SET `name`='$uname',`address`='$uaddress',`establishment`='$year',`category`='$category',`registration_no`='$regno',`location`='$location',`image`='$fileNameNew' WHERE university_id='$id'";
                            move_uploaded_file($fileTmpName,$fileDestination);
                            // query execution 
                          $register=mysqli_query($conn,$qry);
                                }}}
                          if(!$register){
                              die(mysqli_error($conn));
                            echo "failed";
                            }
                        
                            else
                            {
                        
                          ?>
                   <br>
                   <h5 class="text-success text-center">University is Successfully Updated!</h5>
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
