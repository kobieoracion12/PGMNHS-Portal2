<?php

include_once("database.php");

if(isset($_POST['post-announcemenet'])) {
    $uploader = $_POST['number'];
    $content = $_POST['description'];
    $pubmat = $_POST['pubmat'];

    $sql = mysqli_query($config, "INSERT INTO announcements (post_uploader, post_content, post_pubmat) VALUES ('$uploader', '$content', '$pubmat')");
    
    if($sql) {
        header("Location: ../admin/dist/admin-newsfeed.php?success");
    }
    else {
        header("Location: ../admin/dist/admin-newsfeed.php?failed");
    }
}

?>