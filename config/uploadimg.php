<!-- This file is used to upload users profile image -->
<?php
session_start();
include'connection.php';

if (isset($_POST['upload'])) {
    $file=$_FILES['file'];
    print_r($file);
    $fileName=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];

    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));

    $allowed=array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allowed)){
        if ($fileError===0) {
            if ($fileSize<10000000) {
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='../uploads/'.$fileNameNew;
                $id=$_SESSION['id'];
                $sql1="UPDATE `users` SET `image`='$fileNameNew' where user_id='$id'";
                $qry1=mysqli_query($conn,$sql1);
                move_uploaded_file($fileTmpName,$fileDestination);
                
                header("Location:../profileimage.php?success");
            }else {
                echo "You file is too big !";
            }
        }else {
            echo "There was an error uploading your file !"; 
        }
    }else{
        echo 'you cannot upload files of this type !';
    }
}
?>