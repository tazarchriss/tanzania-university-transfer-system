<!-- this is the file for user profile details -->
  <!-- Start of home panels -->
  <div class="section" style="margin:auto;margin-top:5%;">

         
<div class="section">
  <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10" style="margin:auto;">
         <!-- Fetching other necessary details -->
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
                  <div class="card card-primary">
                    <div class="card-header">
             
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-square"
                             src="uploads/<?php echo $row['image']; ?>"
                             alt="User profile picture"
                             style="width:200px;height:200px;"
                             >
                             <br>
                             <a href="profileimage.php" class="text-primary text-center" style="text-align:center;">Change Profile  Image</a>
                      </div>
      
                      <h3 class="profile-username text-center"><?php echo $row['fname'].' '. $row['mname'].' '.$row['sname']; ?></h3>
                      
                      <br>
                      <strong class="text-primary"><i class="fas fa-user-tie mr-1"></i>Form Four index no</strong>
                      <p class="text-muted"><?php echo $row['user_no']; ?></p>
      
                      <hr>
                    
                      <strong class="text-primary"><i class="fas fa-school mr-1"></i> Selected University</strong>
      
                      <p class="text-muted">
                      <?php echo $row30['name']; ?>
                      </p>
      
                      <hr>
                      <strong class="text-primary"><i class="fa fa-book mr-1"></i>Selected Program</strong>
      
                      <p class="text-muted"><?php echo $row40['name']; ?></p>
                      <hr>
                      <strong class="text-primary"><i class="fa fa-envelope mr-1"></i> Email</strong>
      
                      <p class="text-muted">
                        <span class="tag tag-danger"><?php echo $row['email']; ?></span>
                       
                       
                      </p>
      
                      <hr>
                      <strong class="text-primary"><i class="fa fa-phone-alt mr-1"></i> Phone number</strong>
      
                      <p class="text-muted">
                       
                        <span class="tag tag-success"><?php echo $row['pnumber']; ?></span>
                       
                      </p>

                    </div>
                    <div class="card-footer">
                      <a href="editprofile.php" class="btn btn-outline-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
          </div>
   
</div>

</div>
<!-- End of home panels -->
