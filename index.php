<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Menu</title>
</head>

<body>

<h1>Restaurant Menu</h1>

<a href="add_menu.php">Add Food Item</a> |
<a href="orders.php">View Orders</a>


<hr>

<?php
$result = mysqli_query($conn,"SELECT * FROM menu");

while($row = mysqli_fetch_assoc($result)){
?>

<div style="border:1px solid black; padding:10px; margin:10px;">
<img src="uploads/<?php echo $row['image']; ?>" width="200" height="150">

<h3><?php echo $row['name']; ?></h3>

<p>Price: $<?php echo $row['price']; ?></p>

<p><?php echo $row['description']; ?></p>
  <a href="order.php?id=<?php echo $row['id']; ?>">Order</a>
    <a href="edit_menu.php?id=<?php echo $row['id']; ?>">Edit</a>
    <a href="delete_menu.php?id=<?php echo $row['id']; ?>">Delete</a>

</div>

<?php } ?>

</body>
</html>