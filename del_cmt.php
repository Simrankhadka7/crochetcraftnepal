<?php
include('database_conn.php');
$id = $_GET['cmt_id'];
$query = "delete from reviews where ID='$id'";
$result = $conn->query($query);
//print_r($data);
header("location:Display_product.php");
?>