<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM menu WHERE id=$id"));
?>

<h2><?php echo $data['name']; ?></h2>

<form action="place_order.php" method="POST">

<input type="hidden" name="food_id" value="<?php echo $id; ?>">

Your Name:<br>
<input type="text" name="customer_name"><br>

Quantity:<br>
<input type="number" name="quantity"><br>

<button type="submit">Place Order</button>

</form>