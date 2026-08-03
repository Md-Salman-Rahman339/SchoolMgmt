<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit']) || isset($_GET['id'])) {
	if ($id > 0) {
		$conn->query("DELETE FROM student WHERE id=$id");
		$message = "Student Deleted Successfully.";
	} else {
		$message = "Please provide a valid student ID.";
	}
}
?>

<h2>Delete Student</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Student ID<br>
	<input type="number" name="id" value="<?php echo $id; ?>"><br><br>
	<input type="submit" name="submit" value="Delete Student">
</form>

<p><a href="read.php">Back to Student List</a></p>
