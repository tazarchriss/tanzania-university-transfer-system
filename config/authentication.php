<!-- This is a file which performs the authentication of users during login -->
<?php
 session_start();
require_once('connection.php');
    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $pass=$_POST['password'];

        $qry="SELECT * FROM users where email='$email' and password='$pass' limit 1 ";

        $login=mysqli_query($conn,$qry);

        if(!$login) 
        {
            echo mysqli_error($login);
        }
        
        else{
        $rows=mysqli_num_rows($login);
        if($rows==0){
            header('location:../index.php?request=1');
           
        }
        else{
            $res=mysqli_fetch_array($login);
            $id=$res['user_id'];
            $fname=$res['fname'];
            $mname=$res['mname'];
            $lname=$res['sname'];
            $role=$res['role'];
            $indexno=$res['user_no'];
            $email=$res['email'];
            $pnumber=$res['pnumber'];

            // Fetching student details 
            $std="Select * from student where user_id='$id'";
            $qry10=mysqli_query($conn,$std);
            $res=mysqli_fetch_array($qry10);
            $student=$res['student_id'];

            // session creation
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['mname']=$mname;
            $_SESSION['sname']=$lname;
            $_SESSION['role']=$role;
            $_SESSION['indexno']=$indexno;
            $_SESSION['email']=$email;
            $_SESSION['pnumber']=$pnumber;
            $_SESSION['student']=$student;
            if ($_SESSION['role']=='1') {
                header('Location:../admin.php');
            }
            elseif ($_SESSION['role']=='2') {
                header('Location:../tcu.php');
            }
            elseif ($_SESSION['role']=='3') {
                header('Location:../university.php');
            }
            else {
                header('Location:../student.php');
            }
            
        }
           
        }
    }
    ?>