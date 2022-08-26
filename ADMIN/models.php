<?php
session_start();
require_once("../methods.php");

$varProductName = $_POST['product-name'];
$varProductPrice = $_POST['product-price'];
$varProductQuantity = $_POST['product-quantity'];
$fileName = $_FILES['product-image']['name'];

$update_res = add_product($varProductName, $varProductQuantity, $varProductPrice, $fileName);

if ($update_res == true) {
    $file = $_FILES['product-image'];
    $fileType = $_FILES['product-image']['type'];
    $fileLocationTemp = $_FILES['product-image']['tmp_name'];

    $fileDest = '../assets/';
    move_uploaded_file($fileLocationTemp, $fileDest . $fileName);
}

