<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit']) || isset($_GET['id'])) {
	if ($id > 0) {
		$conn->query("DELETE FROM course WHERE id=$id");
		$message = "Course Deleted Successfully.";
	} else {
		$message = "Please provide a valid course ID.";
	}
}
?>

<h2>Delete Course</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Course ID<br>
	<input type="number" name="id" value="<?php echo $id; ?>"><br><br>
	<input type="submit" name="submit" value="Delete Course">
</form>

<p><a href="read.php">Back to Course List</a></p>
