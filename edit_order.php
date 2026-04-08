<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM orders WHERE id=$id"));
?>

<h2>Edit Order</h2>

<form action="update_order.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

Name:<br>
<input type="text" name="customer_name" value="<?php echo $data['customer_name']; ?>"><br>

Quantity:<br>
<input type="number" name="quantity" value="<?php echo $data['quantity']; ?>"><br>

<button type="submit">Update Order</button>

</form>