<?php
session_start();

$prod_name = $_POST['prod_name'];
$pet_name = $_POST['pet_name'];
$company_name = $_POST['company_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$new_file_name = "";

$file = $_FILES['file_name'];
$folder_name = "product_images";
$header_path = 'Location: /View/admin-inventory.html';
include 'upload-image.php';

$fetch_this_animal_id = $pet_name;
include '../Model/fetch-product-id.php';

require 'connect.php';




$query="INSERT INTO products (animalid, name, company, qty, mrp, imagename) VALUES ($fetched_pet_id, '$prod_name', '$company_name', $quantity, $price, '$new_file_name')";
if ($conn->query($query) == TRUE) {
    $_SESSION["message"] = "New product inserted !!!";
}
else{
    $_SESSION["message"] = "Failed to insert new product !!!";
}

header( 'Location: /View/admin-inventory.html' );

?>
