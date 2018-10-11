<?php

//data from form
$folderName = $_POST['folderName'];
//path of directory + form data
$path = "../Files/" . $folderName;
//if
// folder -> name not empty
// folder-> path is valid
if(!empty($folderName) && (!file_exists($path))) {
    //creates folder by path
        mkdir($path);
        //redirect back on success
        header('Location: ' . $_SERVER['HTTP_REFERER']);
}else{
    ////redirect back on fail
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>

