<?php
include('database.php');
session_start();

if(isset($_POST['login_btn']))
{
    $no = $_POST['control_no']; 
    $pass = $_POST['password-input']; 

    $query = "SELECT * FROM account_info WHERE control_no ='$no' AND acc_password='$pass' LIMIT 1";

    $query_run = mysqli_query($config, $query);

    if(mysqli_num_rows($query_run) === 1) {

        $_SESSION['control_no'] = $no;

        while($row = mysqli_fetch_array($query_run)) {
            $privilege = $row['acc_priv'];

            if($privilege == 'Admin') {
                header('Location: ../admin/dist/index.php');
            }
            elseif($privilege == 'Registrar') {
                header('Location: ../registrar/dist/index.php');
            }
            elseif($privilege == 'Faculty') {
                header('Location: ../faculty/dist/index.php');
            }
            elseif($privilege == 'Student') {
                header('Location: ../student/dist/index.php');
            }
            else {
                header("Location: ../index.php?privilege-error");
                //mysqli_error($config);
            }
        }
        
        exit;
    }
    else {
        header("Location: ../index.php?Invalid");
    }
}

?>