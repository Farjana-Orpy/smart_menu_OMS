<?php
include 'db.php';

$food_id = $_POST['food_id'];
$name = $_POST['customer_name'];
$qty = $_POST['quantity'];

$food = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM menu WHERE id=$food_id"));

$total = $food['price'] * $qty;

mysqli_query($conn,"INSERT INTO orders(food_id,customer_name,quantity,total_price)
VALUES('$food_id','$name','$qty','$total')");

header("Location:orders.php");
?>