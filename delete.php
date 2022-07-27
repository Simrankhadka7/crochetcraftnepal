<?php
include('database_conn.php');
$id = $_GET['product_id'];
$query = "delete from products where ID='$id'";
$result = $conn->query($query);
//print_r($data);
header("location:dashboard.php");
?>