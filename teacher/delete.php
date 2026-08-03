<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit']) || isset($_GET['id'])) {
	if ($id > 0) {
		$conn->query("DELETE FROM teacher WHERE id=$id");
		$message = "Teacher Deleted Successfully.";
	} else {
		$message = "Please provide a valid teacher ID.";
	}
}
?>

<h2>Delete Teacher</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Teacher ID<br>
	<input type="number" name="id" value="<?php echo $id; ?>"><br><br>
	<input type="submit" name="submit" value="Delete Teacher">
</form>

<p><a href="read.php">Back to Teacher List</a></p>
