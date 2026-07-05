<?php
include "db.php";

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];

mysqli_query($conn,
"INSERT INTO menu(name,price,category)
VALUES('$name','$price','$category')");

echo "OK";
?>