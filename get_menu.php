<?php
include "db.php";

header('Content-Type: application/json; charset=utf-8');

if(isset($_GET['category'])){

    $cat = $_GET['category'];

    $result = mysqli_query($conn,
    "SELECT * FROM menu_items WHERE category='$cat'");

} else {

    $result = mysqli_query($conn,
    "SELECT * FROM menu_items");

}

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>