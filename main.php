<?php
include_once 'database.class.php';
include_once 'user.php';

function get_config($key)
{
    $cred = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/project/credentials.json');
    $result = json_decode($cred);


    if(isset($result->$key)){

       return $result->$key;

}
else{
   echo "not found!";
}

}
function load_tamplates($name)
{
   include $_SERVER['DOCUMENT_ROOT']."/project/tamplates/$name.html";

}
