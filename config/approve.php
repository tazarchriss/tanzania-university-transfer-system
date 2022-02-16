<?php

require_once('connection.php');

$id=$_POST['regno'];
$index=$_POST['index'];


if(isset($_POST['approve']))
{


// query preparation

    // $qry1="UPDATE `selection` SET `role`='3' WHERE user_id='$id'";

 
$qry2="UPDATE `transfer` SET `status`='Accepted' WHERE transfer_id='$id' ";
// query execution 
// $update=mysqli_query($conn,$qry1);
$update1=mysqli_query($conn,$qry2);
if( !$update1){
//   die.((mysqli_error($register));
echo "failed";
}

else
{

header('location:../ApprovedRequests.php?success=1');
}
}

if(isset($_POST['disapproved']))
{


// query preparation

// $qry1="UPDATE `users` SET `role`='4' WHERE regno='$id'";

$qry2="UPDATE `transfer` SET `status`='Denied' WHERE transfer_id='$id' ";
// query execution 
// $update=mysqli_query($conn,$qry1);
$update1=mysqli_query($conn,$qry2);
if( !$update1){
//   die.((mysqli_error($register));
echo "failed";
}

else
{

header('location:../deniedtransfers.php?success=1');
}
}
?>