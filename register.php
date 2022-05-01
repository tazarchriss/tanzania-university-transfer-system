<!-- This is the file for user registration page -->
<!-- start of header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS| Register</title>

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
<body style="background-color:whitesmoke;">
 <!-- Navbar -->
 <nav class=" navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <h3 class="text-light"><b><i> STS</i></b></h3>
    <ul class="navbar-nav">
    
      <li class="nav-item d-none d-sm-inline-block">
      
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"></a>
      </li>
    </ul>

 
  </nav>
    <section class="content" style="margin-top:5%;">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-8" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center bg-dark">
             
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" method="post" action="config/registration.php">
                  <div class="card-body">
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="fname" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="mname" name="mname" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="lname" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Form Four Index Number</label>
                        <input type="index" name="indexno" class="form-control" id="exampleInputEmail1" placeholder="Enter Form Four Number">
                      </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6 float-left">
                        <label for="exampleInputEmail1">Phone number</label>
                        <input type="text" name="pnumber" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group col-md-6 float-left">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6 float-left ">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Connfirm Password">
                      </div>
            
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary btn-lg" name="signup">Sign up</button>
                    <a href="index.php" class="btn btn-outline-info btn-lg">Log in</a>
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
<br>
      <footer class=" text-center bg-dark" style="height:100px;">
      <br>
    <strong class="mt-5">Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
   
    
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
