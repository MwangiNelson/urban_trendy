<?php
session_start();
require_once("../methods.php");

$order_id = $_POST['order_id'];
$sql_query = "DELETE FROM tbl_orders WHERE order_id = '" . $order_id . "'";

$deletion = setData($order_id);
if ($deletion = true) {
    echo " <script>
    window.location.href ='admin.php';
    alert('Successful Order Elimination');
    </script>
    ";
} else {
    echo " <script>
    window.location.href ='admin.php';
    alert('Failed order elimination!');
    </script>
    ";
}
