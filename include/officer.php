<!-- This is the  file for TCU and university officers profiles -->
<br>
<div class="col-10 col-sm-10 col-md-10 d-flex align-items-stretch flex-column float-right" >
        <div type="radio" class="card bg-light d-flex flex-fill">
        <div class="card-body pt-0">
            <div class="col-12 text-left" style="margin:auto;">
            <div class="col-12 text-center">
<?php
    $usr=$row['user_id'];
                  $index=$row['user_no'];
                  // $sql10="select * from students where user_id='$usr'";
                  // $qry10=mysqli_query($conn,$sql10);
                  // $row10=mysqli_fetch_array($qry10);
                  // $std=$row10['student_id'];
                  $sql20="Select * from selection where F_index_no='$index'";
                  $qry20=mysqli_query($conn,$sql20);
                  $row20=mysqli_fetch_array($qry20);
                  $uid=$row20['university_id'];
                  $sql30="Select * from university where university_id='$uid'";
                  $qry30=mysqli_query($conn,$sql30);
                  $row30=mysqli_fetch_array($qry30);
                  $pid=$row20['program'];
                  $sql40="Select * from program where program_id='$pid'";
                  $qry40=mysqli_query($conn,$sql40);
                  $row40=mysqli_fetch_array($qry40);
      ?>
                  <!-- About Me Box -->
                  <div class="card card-dark">
                    <div class="card-header">
             
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body text-left">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-square"
                             src="user.svg"
                             alt="User profile picture"
                             
                             >
                      </div>
      
                      <h3 class="profile-username text-center"><?php echo $row['fname'].' '. $row['mname'].' '.$row['sname']; ?></h3>
                      <p class="text-muted text-center" hidden>Software Engineer</p>
                      <br>
                    
                    
                      <strong><i class="fas fa-school mr-1"></i> Working University</strong>
      
                      <p class="text-muted">
                      <?php echo $row30['name']; ?>
                      </p>
      
                      <hr>
                      
                      <strong><i class="fa fa-envelope mr-1"></i> Email</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger"><?php echo $row['email']; ?></span>
                       
                       
                      </p>
      
                      <hr>
                      <strong><i class="fa fa-phone-alt mr-1"></i> Phone number</strong>
      
                      <p class="text-muted">
                       
                        <span class="tag tag-success"><?php echo $row['pnumber']; ?></span>
                       
                      </p>

                    </div>
                    <div class="card-footer">
                      <a href="editprofile.php" class="btn btn-primary btn-block"><b>EDIT PROFILE</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                   
  
     



  </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://adminlte.io">TCM</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

                
   
