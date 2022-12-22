<?php

session_start();
$conn = mysqli_connect("localhost","root","","user_db");

if(!$conn){
    die("Sorry error".mysqli_connect_error());
}
?>