<!-- This is the page that allows students to view the transfer progress -->

<?php
      session_start();
      include 'config/connection.php';
if ($_SESSION['role']!='4'){
   header('Location:index.php');
}
?>
<!-- start of header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS| Request</title>

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
    <!--  navbar section -->
   <?php include'include/studentnav.php';?>



    <section class="content mt-5" style="">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-11" style="margin:auto;">
              <!-- jquery validation -->
              <div class="card ">
                <div class="card-header text-center bg-primary">
    
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm">
                  <div class="card-body">
                  <!-- success request message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h5 class="text-success " style="margin-left:20px;">Transfer is  successfully requested !</h5>
                  <?php     
                }

                ?>
                <!-- Fetching selection details -->
                <?php
                      $sql1 = "select * from transfer WHERE student_id='".$_SESSION['student']."'";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                      ?>
                <h4 class="text-primary text-center"> There is no Transfer Request yet !</h4>
                   <br>
                      <a href="AvailableUniversities.php" class="btn btn-outline-primary mx-auto">Request For Transfer</a>
                    <?php

                    }

                    else{
                      ?>
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $std=$row['student_id'];
                      $sql10="select * from student where student_id='$std'";
                      $query10=mysqli_query($conn,$sql10);
                      $row10=mysqli_fetch_array($query10);
                      $us_id=$row10['user_id'];
                      $sql20="select * from users where user_id='$us_id'";
                      $query20=mysqli_query($conn,$sql20);
                      $row20=mysqli_fetch_array($query20);
                      $prog=$row['d_program'];
                      $sql2 = "select * from program WHERE program_id='$prog'";
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                      $uid=$row2['university_id'];
                      $sql3="select * from university where university_id='$uid'";
                      $qry3=mysqli_query($conn,$sql3);
                      $row3=mysqli_fetch_array($qry3);
                     
                      ?>
                                
                    <div class="col-md-12 text-left" style="margin:auto;">
                                    <div class="col-md-12 text-center">
                                        <br>
                                  
                                        <div class="name col-md-12 col-sm-12 float-left">
                                        <table>
                                            <tr>
                                            <td>
                                            <h3 class="text-dark text-left bg-primary" ><span class="badge badge-primary">Full Name</span></h3>
                                            </td>
                                            <td>
                                            <h3 class="text-dark text-left" > <?php echo $_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['sname'];?></h3>
                                            </td>
                                          <tr>
                                            <td>
                                            <h3 class="text-dark text-left bg-primary" ><span class="badge badge-primary">University</span></h3>
                                            </td>
                                            <td>
                                            <h3 class="text-dark text-left" > <?php echo $row3['name'];?></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                          <td>
                                          <h3 class="text-dark text-left bg-primary" ><span class="badge badge-primary">Programme</span></h3>
                                          </td>
                                          <td>
                                                                       
                                          <h3 class="text-dark text-left" > <?php echo $row2['name'];?></h3>
                                          </td>
                                        </tr>
                                        <tr>
                                      <td>
                                        <h3 class="text-left bg-primary"><span class="badge badge-primary"> Status</span></h3>

                                            </td>
                                        <td>
                         
         
                                        
                                        <h5 class="text-left 
                                        <?php if($row['status']=='Denied'){
                                          ?>
                                          text-danger
                                          <?php
                                        } else{
                                        ?>
                                        text-success
                                        <?php } ?>
                                        
                                        "> <?php echo $row['status'];?></h5>
                                        
                                        </td>
                                            </tr>
                                         

                                        </table>
                                        <hr>
                                       <?php
                                       if ($row['status']=='Accepted') {
                                         ?>
                                        <a href="downloadAcceptanceLetter.php" class="btn btn-outline-primary text-left"><i class="fa fa-download"></i> Download Transfer Letter</a>
<?php                                       }?>
                                      </div>
                                      </div>
                                      <hr>
                             <?php
                                
                            }
                        }

                      
                    
                     }?>


                                        
                                  
                    
                    </div>
              </div>
            <!--/.col (left) -->
            <!-- right column -->
           
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section> 
      <footer class="fixed-bottom bg-dark text-center mt-5" style="height:100px">
<br>
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
    
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
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
