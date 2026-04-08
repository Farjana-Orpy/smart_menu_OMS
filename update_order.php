<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['customer_name'];
$qty = $_POST['quantity'];

$order = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM orders WHERE id=$id"));
$food_id = $order['food_id'];

$food = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM menu WHERE id=$food_id"));

$total = $food['price'] * $qty;

mysqli_query($conn,"UPDATE orders SET 
customer_name='$name',
quantity='$qty',
total_price='$total'
WHERE id=$id");

header("Location:orders.php");
?>