<?php
include("../config.php");

if (isset($_POST['submit'])) {
	$dept = $_POST['dept'];
	$title = $_POST['title'];
	$credit = $_POST['credit'];
	$syllabus = $_POST['syllabus'];

	$sql = "INSERT INTO course(dept,title,credit,syllabus) VALUES('$dept','$title','$credit','$syllabus')";
	$conn->query($sql);

	echo "Course Created Successfully.";
}
?>

<h2>Create Course</h2>
<form method="post">
	Department<br>
	<input type="text" name="dept"><br><br>

	Title<br>
	<input type="text" name="title"><br><br>

	Credit<br>
	<input type="number" step="0.01" name="credit"><br><br>

	Syllabus<br>
	<textarea name="syllabus" rows="5" cols="30"></textarea><br><br>

	<input type="submit" name="submit" value="Create Course">
</form>
