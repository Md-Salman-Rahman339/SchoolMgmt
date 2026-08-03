<?php
include("../config.php");

$message = "";

if (isset($_POST['submit']) || (isset($_GET['course_id']) && isset($_GET['semester']))) {
	$course = (int) ($_POST['course_id'] ?? $_GET['course_id']);
	$semester = $_POST['semester'] ?? $_GET['semester'];

	if ($course > 0 && $semester !== "") {
		$conn->query("DELETE FROM course_semester WHERE course_id=$course AND semester='$semester'");
		$message = "Course Removed from Semester Successfully.";
	} else {
		$message = "Please provide valid course ID and semester.";
	}
}
?>

<h2>Remove Course from Semester</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Course ID<br>
	<input type="number" name="course_id"><br><br>

	Semester<br>
	<input type="text" name="semester" placeholder="Fall 2026"><br><br>

	<input type="submit" name="submit" value="Remove Course">
</form>
