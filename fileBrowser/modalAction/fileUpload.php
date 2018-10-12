<?php

$folderName = $_POST['uploadId'];
$target_dir = "../Files/" . $folderName . "/";
$fileSizeInfo = $_FILES["fileToUpload"]["size"];
$name = $_FILES['fileToUpload']['name'];
$temp_name = $_FILES['fileToUpload']['tmp_name'];

//I don't really like this! This need OR can be done more simple........

function fileSizeLimit ($fileSizeInfo)
{
    //50MB limit
    // TODO Warning CHANGE php.ini on production SERVER
    if ($fileSizeInfo > 50000000) {
        echo '<script type="text/javascript">
        alert("File over Limit");
         window.location.href="../../../Php_droperino/fileBrowser/index.php";  
        </script>';
        return $upload = 0;
    } else {
        return $upload = 1;
    }
}

function fileAlreadyExist ($target_dir, $name)
{
    if (file_exists($target_dir . $name)) {
        echo '<script type="text/javascript">
        alert("File name already exist.");
        window.location.href="../../../Php_droperino/fileBrowser/index.php";  
        </script>';
        return $upload = 0;
    } else {
        return $upload = 1;
    }
}

function nameNotEmpty ($name)
{
    if (empty($name)) {
        echo '<script type="text/javascript">
        alert("There is no name.");
            window.location.href="../../../Php_droperino/fileBrowser/index.php";  
        </script>';
        return $upload = 0;
    } else {
        return $upload = 1;
    }
}

if ((fileSizeLimit($fileSizeInfo) && fileAlreadyExist($target_dir, $name) && nameNotEmpty($name)) == 1) {
    move_uploaded_file($temp_name, $target_dir . $name);
    //TODO info on Success - Notification
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

