<?php
include('database.php');
session_start();

if(isset($_POST['login_btn']))
{
    $lrn = $_POST['lrn-input']; 
    $pass = $_POST['password-input']; 

    $query = "SELECT * FROM student_accounts WHERE student_lrn ='$lrn' AND account_password='$pass' LIMIT 1";

    $query_run = mysqli_query($config, $query);

    if(mysqli_num_rows($query_run) === 1) {
        $_SESSION['student_lrn'] = $lrn;
        header('Location: ../student/index.php');
        exit;
    }
    else {
        header("Location: ../index.php?Invalid");
    }
}

?>