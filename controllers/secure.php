<?php

$password = $_POST['password'];

if($password == "123") {
    //Correct password
    header( 'Location: http://localhost:8082/Php_droperino/fileBrowser/index.php' ) ;
}else {
   header( 'Location: http://localhost:8082/Php_droperino/incorrectlogin.php' ) ;
}


?>