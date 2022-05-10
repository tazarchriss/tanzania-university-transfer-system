<!-- This is the file for university details -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-primary"><i class="fa fa-school"></i> University Profile</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Manage Users</a></li>
              <li class="breadcrumb-item active">View Officer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
   <!-- This is the  file for TCU and university officers profiles -->
<br>

                        <div class="col-12 col-sm-12 col-md-12 d-flex align-items-stretch flex-column float-right" >
                            <div type="radio" class="card bg-light d-flex flex-fill">
                              <div class="card-body pt-0">
                                  <?php

                      $sql10 = "select * from officer WHERE user_id='".$_SESSION['id']."'";
                      $query10 = mysqli_query($conn, $sql10); 
                      $row10=mysqli_fetch_array($query10);
                      $oid=$row10['university_id'];      
                      $sql1 = "select * from university WHERE university_id='$oid'";
                      $query1 = mysqli_query($conn, $sql1);
                     if($query1){
                    if (mysqli_num_rows($query1) == 0){
                    echo "The university doesn't yet !";
                      echo "<br>";

                    ?>
                      <a href="parking_registration.php">Add University</a>

                    <?php

                    }

                    else{
                      ?>
                    <div class="row">
                    <?php
                    for ($i=1; $i<=mysqli_num_rows($query1); $i++){
                      $row = mysqli_fetch_array($query1);
                     
                      ?>
                                
                                  <div class="col-12 text-left" style="margin:auto;">
                                    <div class="col-12 text-center">
                                        <br>
                                        <div class="pImage col-md-12 margin-center">
                                        <div class="text-center">
                                    <img class="profile-user-img img-fluid img-square"
                                        src="uploads/university/<?php echo $row['image']; ?>"
                                        alt="University logo"
                                        style="width:200px;height:200px;"
                                        >
                                        <br>
                                        <a href="profileimage.php" class="text-primary text-center" style="text-align:center;">Change University Logo</a>
                                  </div>
                                        
                                        </div>
                                        <br>
                                        <div class="name col-md-12 col-sm-12 float-left">
                                        <h5 class="text-primary text-center" ><?php echo $row['name'];?>  <?php echo $row['registration_no'];?></h5>
                                       
                                        <p class="text-dark text-left">Postal Address : <?php echo $row['address'];?></p>
                                        <p class="text-dark text-left">Owner : <?php echo $row['owner'];?></p>
                                        <p class=" text-left">Category : <?php echo $row['category'];?></p>
                                        <p class="text-dark text-left">Establishment Year : <?php echo $row['establishment'];?> </p>
                                        <p class=" text-left">Location: <?php echo $row['location'];?></p>
                                       
                                            <a href="edituniversity.php?id=<?php echo $row['university_id'];?>" class="btn btn-outline-primary btn-block">Edit</a>
                                        
                                      </div>
                                        
                                  
                    
                    </div>
                   </div>
                             <?php
                                
                            }
                        }

                                ?>
                               
                   
                    <?php
                    
                     }?>


                
                    </div>
                   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="mainfooter text-center bg-dark">
    
    <strong>Copyright &copy; 2022 <a href="#">TCM</a>.</strong>
   
    
  </footer>
