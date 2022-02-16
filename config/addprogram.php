<!-- This is the file that performs the function of adding a program -->

<?php
session_start();
require_once('connection.php');

if(isset($_POST['add']))
{
    $name=$_POST['pname'];
    $code=$_POST['code'];
    $points=$_POST['points'];
    $capacity=$_POST['capacity'];
    $available=$_POST['available'];
    $level=$_POST['level'];
    $year=$_POST['year'];
    $requirements=$_POST['requirements'];
    $user_id=$_SESSION['id'];
  
    // Fetching university details
    $sql1="SELECT * FROM officer WHERE user_id='$user_id'";
    $qry1=mysqli_query($conn,$sql1);
    $uni=mysqli_fetch_array($qry1);
    $university_id=$uni['university_id'];
 

//    query preparation
    $qry="INSERT INTO `program`(`name`, `code`, `points`, `level`, `capacity`,`available`, `year`, `requirements`, `university_id`)VALUES ('$name', '$code', '$points', '$level', '$capacity','$available', '$year', '$requirements', '$university_id')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../addprogram.php?success');
 }
}
?>