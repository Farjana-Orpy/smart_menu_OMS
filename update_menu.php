<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$description = $_POST['description'];

mysqli_query($conn,"UPDATE menu SET 
name='$name',
price='$price',
category='$category',
description='$description'
WHERE id=$id");

header("Location:index.php");
?>