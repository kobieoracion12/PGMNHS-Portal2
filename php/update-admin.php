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
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['emailadd'];
    $nationality = $_POST['nationality'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $guardian = $_POST['guardian'];
    $number = $_POST['emergency'];

    $update = mysqli_query($config, "UPDATE account_info SET first_name = '$first', middle_name = '$middle', last_name = '$last', gender = '$gender', civil_status = '$civil', nationality = '$nationality', birth_date = '$bday', birth_place = '$bplace', religion = '$religion', address = '$address', contact_no = '$contact', email_address = '$email', father_name = '$father', mother_name = '$mother', guardian_name = '$guardian', guardian_number = '$number' WHERE control_no = '$no'");

    if($update) {
        header("Location: ../admin/dist/admin-accounts.php?update-success");
    }
    else {
        header("Location: ../admin/dist/admin-accounts.php?update-failed");
    }
};

?>
