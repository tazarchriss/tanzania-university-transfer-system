<!-- This is the file that performs the process of profile -->

<?php
 session_start();
require_once('connection.php');

if(isset($_POST['save']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $indexno=$_POST['indexno'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $mid=$_SESSION['id'];
  



//    query preparation
    $qry="UPDATE `users` SET `fname`='$fname',`mname`='$mname',`sname`='$lname',`email`='$email',`pnumber`='$pnumber',`user_no`='$indexno' WHERE user_id='$mid'";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../editprofile.php?success');
 }
}
?>

<!-- Student editing starts here -->

<?php

if(isset($_POST['save']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $indexno=$_POST['indexno'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $id=$_POST['id'];
  



//    query preparation
    $qry="UPDATE `users` SET `fname`='$fname',`mname`='$mname',`sname`='$lname',`email`='$email',`pnumber`='$pnumber',`user_no`='$indexno' WHERE user_id='$id'";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../admin.php?success');
 }
}
?>