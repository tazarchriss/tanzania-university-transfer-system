<!-- This is the file that performs the password changing operation -->

<!-- This is the file that performs the user registration function -->
<?php
 session_start();
 $id=$_SESSION['id'];
require_once('connection.php');
// Fetching user details
include 'config/connection.php';
$sql="SELECT * FROM users WHERE user_id='$id'";
$qry=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($qry);

if(isset($_POST['save']))
{
    $opass=$_POST['opass'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
  
    if($opass!=$row['password']){
    header('Location:../changepassword.php?fail1');
    }
    else{
        if($pass1!=$pass2){
            header('Location:../changepassword.php?fail2');
        }
        else{
            // Changing password process starts here
                 //    query preparation
                $qry="UPDATE `users` SET `password`='$pass1' WHERE user_id='$id'";
                // query execution 
                $register=mysqli_query($conn,$qry);
                if(!$register){
                    die(mysqli_error($conn));
                    echo "failed";
                    }
                
                    else
                    {
                
                header('location:../changepassword.php?success');
                }
        }
    }



}
?>