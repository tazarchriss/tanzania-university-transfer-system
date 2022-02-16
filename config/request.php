<!-- This is the file that sends the transfer request to the database -->
<!-- This is the file that performs the university registration function -->
<?php

require_once('connection.php');

if(isset($_POST['save']))
{
    $student_id=$_POST['student_id'];
    $d_university=$_POST['d_university'];
    $d_program=$_POST['d_program'];


 

//    query preparation
    $qry="INSERT INTO `transfer`(`student_id`, `d_university`, `d_program`, `status`) VALUES  ('$student_id','$d_university','$d_program','pending')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
    echo "failed";
      die(mysqli_error($conn));

    }

    else
    {

   header('location:../request.php?success');
 }
}
?>