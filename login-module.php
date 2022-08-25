<?php
session_start();
require_once("methods.php");

$varEmail = $_POST['user-email'];
$varPassword = $_POST['user-password'];

verifyUser($varEmail, $varPassword);
