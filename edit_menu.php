<?php
include 'db.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM menu WHERE id=$id"));
?>

<form action="update_menu.php" method="POST">

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

Name:<br>
<input type="text" name="name" value="<?php echo $data['name']; ?>"><br>

Price:<br>
<input type="number" name="price" value="<?php echo $data['price']; ?>"><br>

Category:<br>
<input type="text" name="category" value="<?php echo $data['category']; ?>"><br>

Description:<br>
<textarea name="description"><?php echo $data['description']; ?></textarea><br>

<button type="submit">Update</button>

</form>