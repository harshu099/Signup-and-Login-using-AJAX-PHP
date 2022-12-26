<?php
require 'function.php';
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>

<form method="post" id="signup_form">
        <input type="hidden" id="action" value="signup">
        <div>
            <label>Name:</label>
            <input type="text" id="name">
        </div>
        <div>
            <label>UserName:</label>
            <input type="text"  id="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="text" id="password">
        </div>
        <div>
            <button type="button" id="submit_btn" onclick="submitData();">SignUp</button>
        </div>
        <div>
            <a href="login.php">Go To Login</a>
        </div>
</form>

<?php require './script.php'; ?>
</html>