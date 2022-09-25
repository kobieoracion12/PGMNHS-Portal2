<?php
include_once("database.php");

if(isset($_GET['document_no'])) {
    $id = $_GET['document_no'];

    $filename = $_FILES['fileToUpload']['name'];
    $destination = '../uploads/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['fileToUpload']['tmp_name'];
    $size = $_FILES['fileToUpload']['size'];

    if(!in_array($extension, ['pdf'])) {
        //header("Location: ../admin/dist/form-management.php?unsupported-file");
        echo mysqli_error($config);
    }
    else {
        $query = mysqli_query($config, "SELECT * FROM 'school_document' WHERE document_name = '$filename'");
        $counter = mysqli_num_rows($query);

        if($counter == 1) {
           // header("Location: ../admin/dist/form-management.php?already_exist");
           echo mysqli_error($config);
        }

        if(move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO school_document (document_name, document_size) VALUES ('$filename', '$size')";
            if(mysqli_query($config, $sql)) {
                //header("Location: ../admin/dist/form-management.php?file_uploaded");
                echo mysqli_error($config);
            }
            else {
                //header("Location: ../admin/dist/form-management.php?upload-failed");
                echo mysqli_error($config);
            }
        }
    }
}

?>