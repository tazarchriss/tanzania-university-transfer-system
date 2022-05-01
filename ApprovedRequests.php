<?php
      session_start();
      include_once "config/connection.php";
      if ($_SESSION['role']!='3'){
        header('Location:index.php');
     }
     $sql80 = "select * from officer WHERE user_id='".$_SESSION['id']."'";
     $query80 = mysqli_query($conn, $sql80); 
     $row80=mysqli_fetch_array($query80);
     $oid=$row80['university_id'];   
     $sql1 = "select * from transfer where status='Accepted' and d_university='$oid'";
     
      $query1 = mysqli_query($conn, $sql1);
      if ($query1){
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | View Voters</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- navbar section -->
<?php include'include/uninav.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="text-primary"><i class="fa fa-download"></i> Accepted Requests</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Requests</a></li>
              <li class="breadcrumb-item active">Accepted Requests</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php

              if (mysqli_num_rows($query1) == 0){


              ?>
              <h3 class="text-center text-primary"> No Accepted Transfer Requests Available ! </a>

              <?php

              }

              else{
                ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>CSSE Index No</th>
                    <th>Transferred University</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      $student=$row['student_id'];
                      $sql2 = "select * from student WHERE student_id='$student'";
                      
                      $query2 = mysqli_query($conn, $sql2);
                      $row2 = mysqli_fetch_array($query2);
                      $uid=$row2['user_id'];
                      $sql3 = "select * from users WHERE user_id='$uid' ";
                      $query3 = mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_array($query3);
                      $unid=$row['d_university'];
                      $sql4 = "select * from university WHERE university_id='$unid' ";
                      $query4 = mysqli_query($conn, $sql4);
                      $row4 = mysqli_fetch_array($query4);
                  ?>
                  <tr>
                    <td><?php echo $i;  ?></td>
                    <td><?php echo $row3['fname']; ?></td>
                   <td><?php echo $row3['mname'];  ?></td>
                   <td><?php echo $row3['sname'];  ?></td>
                    <td ><?php echo $row3['user_no'];?></td>
                    <td ><?php echo $row4['name'];?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                      <a href="singlerequest.php?id=<?php echo $row['transfer_id'];?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  <tr>


                </tbody>
                <?php 
              }
              ?>
            </table>
            <?php

        }


        }

        else {


          die(mysqli_error($conn));
        }



        mysqli_close($conn);
        ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
