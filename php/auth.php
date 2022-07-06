<?php
include('database.php');
session_start();

if(isset($_POST['login_btn']))
{
    $lrn = $_POST['lrn-input']; 
    $pass = $_POST['password-input']; 

    $query = "SELECT * FROM student_account WHERE student_lrn ='$lrn' AND student_password='$pass' LIMIT 1";
    $query_run = mysqli_query($config, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['account_priv'] == "Student")
    {
        $_SESSION['student_lrn'] = $lrn;
        header('Location: ../student/index.php');
		exit;
    }
    else if($usertypes['account_priv'] == "Admin")
    {
        $_SESSION['student_lrn'] = $lrn;
        header('Location: ../admin/index.php');
		exit;
    }
    else {
	header("location: ../index.php?Invalid");
	}
}
?>