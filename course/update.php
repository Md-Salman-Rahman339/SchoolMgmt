<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit'])) {
	$id = (int) $_POST['id'];
	$dept = $_POST['dept'];
	$title = $_POST['title'];
	$credit = $_POST['credit'];
	$syllabus = $_POST['syllabus'];

	$sql = "UPDATE course SET dept='$dept', title='$title', credit='$credit', syllabus='$syllabus' WHERE id=$id";
	$conn->query($sql);
	$message = "Course Updated Successfully.";
}

$course = [
	'id' => $id,
	'dept' => '',
	'title' => '',
	'credit' => '',
	'syllabus' => ''
];

if ($id) {
	$result = $conn->query("SELECT * FROM course WHERE id=$id");
	if ($result && $result->num_rows > 0) {
		$course = $result->fetch_assoc();
	}
}
?>

<h2>Update Course</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	<input type="hidden" name="id" value="<?php echo $course['id']; ?>">

	Department<br>
	<input type="text" name="dept" value="<?php echo $course['dept']; ?>"><br><br>

	Title<br>
	<input type="text" name="title" value="<?php echo $course['title']; ?>"><br><br>

	Credit<br>
	<input type="number" step="0.01" name="credit" value="<?php echo $course['credit']; ?>"><br><br>

	Syllabus<br>
	<textarea name="syllabus" rows="5" cols="30"><?php echo $course['syllabus']; ?></textarea><br><br>

	<input type="submit" name="submit" value="Update Course">
</form>
