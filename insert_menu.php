<?php
include 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $image);

mysqli_query($conn,"INSERT INTO menu(name,price,category,description,image)
VALUES('$name','$price','$category','$description','$image')");

header("Location:index.php");
?>