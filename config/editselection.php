<!-- This is the page which perform the selection edit function -->

<?php 

session_start();
include('connection.php');
                if (isset($_POST['edit'])) {
                    $fname=$_POST['fname'];
                    $mname=$_POST['mname'];
                    $lname=$_POST['lname'];
                    $index=$_POST['index'];
                    $university_id=$_POST['university'];
                    $program=$_POST['program'];
                 
                    $user_id=$_SESSION['id'];
                    $sid=$_POST['selection'];
               
               
                
                //    query preparation
                    $qry="UPDATE `selection` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`F_index_no`='$index',`university_id`='$university_id',`program`='$program' WHERE selection_id='$sid'";
                // query execution 
                   $register=mysqli_query($conn,$qry);
                  if(!$register){
                      // die(mysqli_error($conn));
                    echo "failed";
                    }
                
                    else
                    {
                        
                  header('Location:../viewselections.php?success');
                //    <!-- <br>

          
                //    <h5 class="text-success text-center">Selection is Successfully Updated!</h5> -->
               
                 }
                }
            ?>