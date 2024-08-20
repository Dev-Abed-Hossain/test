<?php
 date_default_timezone_get();

//  Include Functions File
 if(file_exists(__DIR__ .'/app/functions.php')){
    require_once __DIR__ .'/app/functions.php';
 }

//  Include Data File
if(file_exists(__DIR__ .'/app/data.php')){
    require_once __DIR__ .'/app/data.php';
}

?>