<?php

include_once("database.php");

if(isset($_POST['update'])) {
    $no = $_POST['control_no'];
    $first = $_POST['fname'];
    $middle = $_POST['mname'];
    $last = $_POST['lname'];
    $gender = $_POST['gender'];
    $civil = $_POST['civil_stat'];
    $nationality = $_POST['nationality'];
    $bday = $_POST['bday'];
    $bplace = $_POST['bplace'];
    $religion = $_POST['religion'];
    $address = $_POST['my_address'];
    $contact = $_POST['contact'];
    $email = $_POST['emailadd'];
    
    

    $update = mysqli_query($config, "UPDATE account_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', gender = '$gender', civil_status = '$civil', nationality = '$nationality', birth_date = '$bday', birth_place = '$bplace', religion = '$religion',my_address = '$address', contact_no = '$contact', email_address = '$email' WHERE control_no = '$no'");

    if($update) {
        header("Location: ../admin/dist/admin-accounts.php?update-success");
    }
    else {
        header("Location: ../admin/dist/admin-accounts.php?update-failed");
    }
};

?>
