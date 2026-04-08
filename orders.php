<?php include 'db.php'; ?>

<h2>Orders</h2>

<?php
$result = mysqli_query($conn,"SELECT * FROM orders");

while($row = mysqli_fetch_assoc($result)){
?>

<div>

<p>Name: <?php echo $row['customer_name']; ?></p>
<p>Quantity: <?php echo $row['quantity']; ?></p>
<p>Total: $<?php echo $row['total_price']; ?></p>

<a href="delete_order.php?id=<?php echo $row['id']; ?>">Delete</a>

<hr>

</div>

<?php } ?>