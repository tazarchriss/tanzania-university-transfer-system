<!-- This page allows the admin to view all students -->


<?php
      session_start();
      if ($_SESSION['role']!='1'){
        header('Location:index.php');
     }
      include_once "config/connection.php";
      $sql1 = "select * from users where role='4'";
      $query1 = mysqli_query($conn, $sql1);
      if ($query1){
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>STS | Student List</title>

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
<?php include 'include/adminnav.php';?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="text-primary"><i class="fa fa-users"></i> All Students</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item active">Manage Users/ View Students</li>
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
                
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                        <!-- Profile update success message -->
                 <?php
                  if (isset($_GET["success"])){
                  ?>
                <h3 class="text-success " style="margin-left:20px;">Student is successfully updated !</h3>
                  <?php     
                }

                ?>
              <?php

if (mysqli_num_rows($query1) == 0){


?>
<h3 class="text-center text-primary"> No Selections were made ! </a>

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
                    <th>Selected University</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                        // for university details
                        $usr=$row['user_no'];
                        $sql5 = "select * from selection WHERE F_index_no='$usr' ";
                        $query5 = mysqli_query($conn, $sql5);
                        $row5 = mysqli_fetch_array($query5);
                      $unid=$row5['university_id'];
                      $sql4 = "select * from university WHERE university_id='$unid' ";
                      $query4 = mysqli_query($conn, $sql4);
                      $row4 = mysqli_fetch_array($query4);
                  ?>
                  <tr>
                    <td><?php echo $i;  ?></td>
                    <td><?php echo $row['fname']; ?></td>
                   <td><?php echo $row['mname'];  ?></td>
                   <td><?php echo $row['sname'];  ?></td>
                    <td ><?php echo $row['user_no'];?></td>
                    <td ><?php echo $row4['name'];?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                      <a href="singlestudent.php?id=<?php echo $row['user_id'];?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>

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
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <footer class="main-footer text-center bg-dark">
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
   
    
  </footer>
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
