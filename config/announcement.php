<!-- This is the file for announcement adding operation -->

<?php

require_once('connection.php');

if(isset($_POST['save']))
{
    $user_id=$_POST['userid'];
    $title=$_POST['title'];
    $announcement=$_POST['announcement'];
    $file=$_FILES['file'];
    
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf','xlsx','svg');
    if(in_array($fileActualExt,$allowed)){
        if ($fileError===0) {
            if ($fileSize<10000000) {
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='../uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
              
            
             
            
            //    query preparation
                $qry="INSERT INTO `announcement`(`title`, `announcement`,`user_id`,`attachment`) VALUES('$title','$announcement','$user_id','$fileNameNew')";
            // query execution 
               $post=mysqli_query($conn,$qry);
              if(!$post){
                  die(mysqli_error($conn));
                echo "failed";
                }
            
                else
                {
            
               header('location:../addannouncement.php?success');
             }
            }
              
            }else {
                echo "You file is too big !";
            }
        }else {
            echo "There was an error uploading your file !"; 
        }
    }else{
        echo 'you cannot upload files of this type !';
    }

?>