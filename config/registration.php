<!-- This is the file that performs the user registration function -->
<?php

require_once('connection.php');

if(isset($_POST['signup']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $indexno=$_POST['indexno'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $cpassword=$_POST['password'];

    if ($password!=$cpassword) {
      header('Location:../register.php');
    }
    $sql1="select * from selection where F_index_no='$indexno'";
    $qry1=mysqli_query($conn,$sql1);
    $res=mysqli_num_rows($qry1);
    if ($qry1==0) {
      header('Location:../register.php?register');
    }
    else{
//    query preparation
    $qry="INSERT INTO `users`(`fname`, `mname`, `sname`, `email`, `pnumber`, `password`, `role`, `user_no`) VALUES ('$fname','$mname','$lname', '$email', '$pnumber','$password', '4','$indexno ')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../index.php');
 }
}
}

// <!-- For university officers -->
if(isset($_POST['officer1']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $university=$_POST['university'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $cpassword=$_POST['password'];

    if ($password!=$cpassword) {
      header('Location:../adduniofficer.php');
    }
  
//    query preparation
    $qry="INSERT INTO `users`(`fname`, `mname`, `sname`, `email`, `pnumber`, `password`, `role`, `user_no`) VALUES ('$fname','$mname','$lname', '$email', '$pnumber','$password', '3','$university ')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else {
    $sql2="Select* from users where email='$email'";
    $qry2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($qry2);
    $usr=$row2['user_id'];
    $sql3="INSERT INTO `officer`( `user_id`, `university_id`) VALUES ('$usr','$university')";
    $qry3=mysqli_query($conn,$sql3);
   

   header('location:../viewuniofficer.php?success');
 }
}

// For Administrators

if(isset($_POST['officer2']))
{
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $cpassword=$_POST['password'];

    if ($password!=$cpassword) {
      header('Location:../addtcuofficer.php');
    }
  
//    query preparation
    $qry="INSERT INTO `users`(`fname`, `mname`, `sname`, `email`, `pnumber`, `password`, `role`, `user_no`) VALUES ('$fname','$mname','$lname', '$email', '$pnumber','$password', '$role','admin')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else {
   

   header('location:../viewuniofficer.php?success');
 }
}
?>