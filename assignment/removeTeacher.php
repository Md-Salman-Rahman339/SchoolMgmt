<?php
include("../config.php");

$message = "";

if (isset($_POST['submit']) || (isset($_GET['course_id']) && isset($_GET['teacher_id']))) {
	$course = (int) ($_POST['course_id'] ?? $_GET['course_id']);
	$teacher = (int) ($_POST['teacher_id'] ?? $_GET['teacher_id']);

	if ($course > 0 && $teacher > 0) {
		$conn->query("DELETE FROM course_teacher WHERE course_id=$course AND teacher_id=$teacher");
		$message = "Assignment Removed Successfully.";
	} else {
		$message = "Please provide valid course and teacher IDs.";
	}
}
?>

<h2>Remove Course from Teacher</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Course ID<br>
	<input type="number" name="course_id"><br><br>

	Teacher ID<br>
	<input type="number" name="teacher_id"><br><br>

	<input type="submit" name="submit" value="Remove Assignment">
</form>
