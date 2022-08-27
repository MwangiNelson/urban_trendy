<?php
require("methods.php");
$session = session_start();

$cart_Array = $_SESSION['cart'];
$user_id = $_SESSION['user_id'];

$currentItem = 0;
foreach ($_SESSION['cart'] as $cartItem) :
    $product_name =   $cartItem['product_name'];
    $product_price =   $cartItem['product_price'];
    $product_quantity =   $cartItem['product_quantity'];


    unset($_SESSION['cart']);
    unset($_SESSION['totals']);

    placeOrder($user_id, $product_name, $product_quantity, $product_price);
    $currentItem++;
endforeach;

if ($currentItem = count($cart_Array)) {
    echo " <script>alert('Order placed successfully.'); window.location.href ='cart.php';</script>";
}
