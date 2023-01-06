<?php
require './db_connect.php';

global $conn;

if (isset($_POST["action"])) {
    if ($_POST["action"] == "signup") {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($name == "" || $username == "" || $password == "") {
            echo ("fill all the fields");
            exit;
        } else {
            $sql = "SELECT * FROM `user_table` WHERE `username`= '$username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {
                echo ("username exist. try different username.");
            } else {
                $sql = "INSERT INTO `user_table`(`id`,`name`, `username`, `password`) VALUES ('','$name','$username','$password')";
                $result = mysqli_query($conn, $sql);
                echo ("register success");
            }
        }
    } elseif ($_POST["action"] == "login") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "" || $password == "") {
            echo ("fill all the fields");
            exit;
        } else {
            $sql = "SELECT * FROM `user_table` WHERE `username`= '$username'";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            if ($num > 0) {

                // $sql1 = "SELECT * FROM `user_table` WHERE `username`= '$username' AND `password`='$password'";
                // $result1 = mysqli_query($conn, $sql1);
                // $num1 = mysqli_num_rows($result1);
                // if ($num1 > 0) {
                //     echo ("login success");
                // }

                $row=mysqli_fetch_assoc($result);
                if ($password==$row["password"]) {
                    echo ("login success");
                    $_SESSION["login"]=true;
                    $_SESSION["id"]=$row["id"];
                } else {
                    echo ("wrong password");
                    exit;
                }
            } else {
                echo ("username not exist.");
                exit;
            }
        }
    }
}
