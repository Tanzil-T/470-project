<?php

session_start();

if(isset($_SESSION['pet_id_filter'])) {
    unset($_SESSION['pet_id_filter']);
}

header("location: /View/admin-inventory");

?>