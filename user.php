<?php

class user
{
    public static function signup($name,$username,$phonenumber,$email,$password)
    {
        $conn = database::getconnection();

        $pass=md5($password);


        $sql = "INSERT INTO `users` (`name`,`username`,`phonenumber`,`email`,`password`)
        VALUES('$name', '$username', '$phonenumber', '$email', '$pass')";

        $result = $conn->query($sql);

        if($result == true){
            return true;

        }
        else{
            return false;
        }
    }
    public static function login($name,$password)
    {
        $conn=database::getconnection();


        $pass =md5($password);

        $sql="SELECT * FROM `users` WHERE `name` = '$name'";

        $result = $conn->query($sql);

        if($result -> num_rows == 1){
            $row = $result->fetch_assoc();
            if($row['password']==$pass)
            {
                return true;
            }
            else{
                return false;
            }

        }

    }

}
