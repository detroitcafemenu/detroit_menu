<?php
include "db.php";

$id = $_POST['id'];

mysqli_query($conn,
"DELETE FROM menu WHERE id=$id");

echo "OK";
?>