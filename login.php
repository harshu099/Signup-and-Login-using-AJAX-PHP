<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<form action="login1.php" method="post" id="login_form">
    <input type="hidden" id="action" value="login">
        <div>
            <label>UserName:</label>
            <input type="text"  id="username">
        </div>
        <div>
            <label>Password:</label>
            <input type="text" id="password">
        </div>
        <div>
        <button type="button" id="submit_btn" onclick="submitData();">Login</button>
        </div>
</form>

<?php require './script.php'; ?>
</html>