<?php
include_once 'main.php';

class database
{
public static $conn = null;


public static function getconnection()
{
    if(database::$conn == null){
    $servername=get_config('servername');
    $username=get_config('username');
    $password=get_config('password');
    $dbname=get_config('dbname');
   
    $connection=new mysqli($servername,$username,$password,$dbname);

    if($connection->connect_error){
        die("connection fail");

    }
    database::$conn =$connection;
    return database::$conn;

}
else{
    return database::$conn;
}
}
}
