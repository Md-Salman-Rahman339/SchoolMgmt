<?php
include("../config.php");

$message = "";

if (isset($_POST['submit']) || (isset($_GET['course_id']) && isset($_GET['dept']) && isset($_GET['semester']))) {
	$course = (int) ($_POST['course_id'] ?? $_GET['course_id']);
	$dept = $_POST['dept'] ?? $_GET['dept'];
	$semester = $_POST['semester'] ?? $_GET['semester'];

	if ($course > 0 && $dept !== "" && $semester !== "") {
		$sql = "INSERT INTO course_semester(course_id,dept,semester) VALUES($course,'$dept','$semester')";
		$conn->query($sql);
		$message = "Course Added to Semester Successfully.";
	} else {
		$message = "Please provide course ID, department, and semester.";
	}
}
?>

<h2>Add Course to Semester</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	Course ID<br>
	<input type="number" name="course_id"><br><br>

	Department<br>
	<input type="text" name="dept"><br><br>

	Semester<br>
	<input type="text" name="semester" placeholder="Fall 2026"><br><br>

	<input type="submit" name="submit" value="Add Course">
</form>
