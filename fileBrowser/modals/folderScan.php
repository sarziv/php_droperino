<?php

//Array folders and turned into clean array
function scannedArray() {

    //Folder locations
    $folder = "./Files";


    //folder is scanned
    $scannedFolder = scandir($folder);

    //new array for list of folders
    $arrayList = array();

    foreach ($scannedFolder as $f)
    {
        if ($f !== '.' and $f !== '..')
        {
            array_push($arrayList, $f);
        }
    }
    return $arrayList;
}
?>

