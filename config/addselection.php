<!-- This is the file which performs the operation of adding selection -->
<!-- This is the file that performs the function of adding a program -->

<?php
session_start();
require_once('connection.php');

if(isset($_POST['add']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $index=$_POST['index'];
    $university_id=$_POST['university'];
    $program=$_POST['program'];
 
    $user_id=$_SESSION['id'];
  
    // // Fetching university details
    // $sql1="SELECT * FROM university WHERE user_id='$user_id'";
    // $qry1=mysqli_query($conn,$sql1);
    // $uni=mysqli_fetch_array($qry1);
    // $university_id=$uni['university_id'];
 

//    query preparation
    $qry="INSERT INTO `selection`(`fname`, `mname`, `lname`, `F_index_no`, `university_id`, `program`) VALUES  ('$fname', '$mname', '$lname', '$index', '$university_id','$program')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../addselection.php?success');
 }
}
?>