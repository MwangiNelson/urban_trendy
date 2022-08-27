<?php
session_start();
require_once("../methods.php");

$order_id = $_POST['order_id'];

$sql_query = "UPDATE tbl_orders SET order_status = 2 WHERE order_id = '" . $order_id . "'";

$deletion = setData($sql_query);
if ($deletion = true) {
    echo " <script>
    window.location.href ='admin.php';
    alert('Successful Order Completion');
    </script>
    ";
} else {
    echo " <script>
    window.location.href ='admin.php';
    alert('Failed to complete order!');
    </script>
    ";
}
