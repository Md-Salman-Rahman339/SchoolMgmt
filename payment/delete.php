<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit']) || isset($_GET['id'])) {
	if ($id > 0) {
		$conn->query("DELETE FROM payment WHERE payment_id=$id");
		$message = "Payment Deleted Successfully.";
	} else {
		$message = "Please provide a valid payment ID.";
	}
}
?>

<h2>Delete Payment</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Payment ID<br>
	<input type="number" name="id" value="<?php echo $id; ?>"><br><br>
	<input type="submit" name="submit" value="Delete Payment">
</form>

<p><a href="read.php">Back to Payment List</a></p>
