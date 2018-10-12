<?php

//data from form
$folderName = $_POST['folderName'];
//path of directory + form data
$path = "../Files/" . $folderName;
//if
// folder -> name not empty
// folder-> path is valid
if (!empty($folderName) && (!file_exists($path))) {
    //creates folder by path
    mkdir($path);

    echo '<script type="text/javascript">
        alert("Folder already exist.");
        window.location.href="../../../Php_droperino/fileBrowser/index.php";  
        </script>';
    //TODO Notification info Success
    //redirect back on success

} else {
    //TODO Notification info fail
    ////redirect back on fail
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

