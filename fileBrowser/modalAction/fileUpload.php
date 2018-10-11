<?php
$folderName = $_POST['uploadId'];
$target_dir = "../Files/" . $folderName . "/";


if(isset($_POST['submit'])) {
    $name = $_FILES['fileToUpload']['name'];
    $temp_name = $_FILES['fileToUpload']['tmp_name'];

    if (isset($name) && !empty($name) && !file_exists($target_dir . $name)) {
        move_uploaded_file($temp_name, $target_dir . $name);
        //TODO info on Success - Notification
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        //TODO info on fail - Notification
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

