<?php

require 'c_admin.php';
$control = new c_admin();
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
    
if ($confirm_password == $password && is_null($control->getData($username))) {
    $control->setData($username, $password);
}
else {
    header("Location: register.php?error=1");
}