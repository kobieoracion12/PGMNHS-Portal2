<?php
include('../php/database.php');
session_start();

if(isset($_POST['login_btn']))
{
    $emp = $_POST['employee-input']; 
    $pass = $_POST['password-input']; 

    $query = "SELECT * FROM faculty_accounts WHERE employee_no ='$emp' AND employee_password='$pass' LIMIT 1";
    
    $query_run = mysqli_query($config, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['account_priv'] == "Admin")
    {
        $_SESSION['employee_no'] = $lrn;
        header('Location: ../admin/dashboard.php');
		exit;
    }
    else if($usertypes['account_priv'] == "Department")
    {
        $_SESSION['employee_no'] = $lrn;
        header('Location: ../department/index.php');
		exit;
    }
    else if($usertypes['account_priv'] == "Faculty")
    {
        $_SESSION['employee_no'] = $lrn;
        header('Location: ../faculty/index.php');
        exit;
    }
    else {
	header("location: ../admin/index.php?Invalid");
	}
}
?>