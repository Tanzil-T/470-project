<?php

$emailid = $_GET['username'];
$password = $_GET['password'];

session_start();

if($emailid=="admin" && $password=="admin123") {
    $_SESSION["admin"] = "admin";
    header('location: /View/admin-inventory.html');
}
else {
    $_SESSION["message"] = "Login Failed.";
    $_SESSION["message_desc"] = "Cross-verify your user ID or password.";
    header( 'location: /View/admin-sign-in.html' );
}

?>