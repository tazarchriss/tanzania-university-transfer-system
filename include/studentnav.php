<!-- This is the file which contain student navbar -->
   <!-- start of navbar -->
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
      <div class="container">
    
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
       
                <!-- Left navbar links -->
                <ul class="navbar-nav mx-auto">
            
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="student.php" class="nav-link"><i class="fa fa-home"></i> Home</a>
                  </li>

                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="AvailableUniversities.php" class="nav-link"><i class="fa fa-school"></i> universities</a>
                  </li>
                  <?php 
                                
                                  
                                $sq = "select * from transfer WHERE student_id='".$_SESSION['id']."'";
                                $qry = mysqli_query($conn, $sq);
                                

                                if(mysqli_num_rows($qry)=='0'){
                                ?>
                            <li class="nav-item d-none d-sm-inline-block">
                    <a href="request.php" class="nav-link"><i class="fa fa-download"></i>Transfer Progress</a>
                          </li>
                                <?php
                                }?>

                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="profile.php" class="nav-link"><i class="fa fa-user"></i> Profile</a>
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <a href="config/logout.php" class="nav-link"><i class="fa fa-power-off"></i> Log out</a>
                  </li>
                </ul>
                
          
          </div>
      </div>
  </nav>
