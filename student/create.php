<?php
include("../config.php");

if (isset($_POST['submit'])) {
	$dept = $_POST['dept'];
	$name = $_POST['name'];
	$nid = $_POST['nid'];
	$birth = $_POST['birth'];
	$address = $_POST['address'];

	$sql = "INSERT INTO student(dept,name,nid,birth,address) VALUES('$dept','$name','$nid','$birth','$address')";
	$conn->query($sql);

	echo "Student Created Successfully.";
}
?>

<h2>Create Student</h2>
<form method="post">
	Department<br>
	<input type="text" name="dept"><br><br>

	Name<br>
	<input type="text" name="name"><br><br>

	NID<br>
	<input type="text" name="nid"><br><br>

	Birth<br>
	<input type="date" name="birth"><br><br>

	Address<br>
	<input type="text" name="address"><br><br>

	<input type="submit" name="submit" value="Create Student">
</form>