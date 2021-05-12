<?php

require 'c_admin.php';
$control = new c_admin();
$username = $_POST['username'];
$password = $_POST['password'];
$data = $control->getData($username);
$usernameDB = $data->username;
$passwordDB = $data->password;

if ($username == $usernameDB && $password == $passwordDB) {
    session_start();
    $_SESSION["username"] = $username;
    header("Location: ../index.php");
}
else {
    header("Location: login.php?error=1");
}