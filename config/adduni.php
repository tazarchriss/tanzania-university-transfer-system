<!-- This is the file that performs the university registration function -->
<?php

require_once('connection.php');

if(isset($_POST['save']))
{
    $uname=$_POST['uname'];
    $uaddress=$_POST['uaddress'];
    $umail=$_POST['umail'];
    $owner=$_POST['owner'];
    $year=$_POST['year'];
    $category=$_POST['category'];
    $regno=$_POST['regno'];
    $location=$_POST['location'];

 

//    query preparation
    $qry="INSERT INTO `university`( `name`,`address`,`owner`, `establishment`, `category`, `registration_no`, `location`,`status`) VALUES ('$uname','$uaddress','$owner','$year','$category','$regno','$location','Active')";
// query execution 
   $register=mysqli_query($conn,$qry);
  if(!$register){
      die(mysqli_error($conn));
    echo "failed";
    }

    else
    {

   header('location:../adduniversity.php?success');
 }
}
?>