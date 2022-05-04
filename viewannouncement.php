<!-- This is the user interface that views the list of all announcements -->

<?php
      session_start();
       include_once "config/connection.php";
       $sql1 = "select * from announcement";
       $query1 = mysqli_query($conn, $sql1);
       if ($query1){
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TCU | View Announcements</title>

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

<!-- Navbar section -->
<?php include 'include/tcunav.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="text-primary"><i class="fa fa-bell"></i> Announcements List</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Announcements</a></li>
              <li class="breadcrumb-item active">View Announcement</li>
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
                   <p class="text-info">No Announcements were added !</p>

                    <?php

                    }

                    else{
                      ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Announcement Title</th>
                    <th>Announcement Date</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                      // $name=$row['store_type'];
                      // $sql2 = "select * from store_type WHERE id='$name'";
                      // $query2 = mysqli_query($conn, $sql2);
                      // $row2 = mysqli_fetch_array($query2);
                          ?>
                          <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            
                            <td class="text-center py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                            <a href="singleannouncement.php?id=<?php echo $row['announcement_id'];?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                             
                            </div>
                            </td>
                      </tr>
                      <div class=""></div>
                  <?php 
                    }
                    ?>
                      </tbody>
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
