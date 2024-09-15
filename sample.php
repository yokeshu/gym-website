<?php

include_once 'class/main.php';

$connection = database::getconnection();

if($connection == true){
    echo"connection sucess";
}

else{
    echo"connection is fail";
}
