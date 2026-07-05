<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];

mysqli_query($conn,
"UPDATE menu SET name='$name', price='$price' WHERE id=$id");

echo "OK";
?>