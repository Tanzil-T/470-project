<?php

$conn = new mysqli('localhost','root','','petshopmgmt');
if ($conn->connect_error) {
    die("Connection failed!" . $conn->connect_error);
}

?>
