<?php
require './db_connect.php';

global $conn;

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];

// echo($password);

if(isset($_POST["action"])){
    if($_POST["action"]=="signup"){

        $sql="INSERT INTO `user_table`(`id`,`name`, `username`, `password`) VALUES ('','$name','$username','$password')";
        $result=mysqli_query($conn,$sql);
        echo("register succes");
    }
    elseif($_POST["action"]=="login"){

    }
}
?>