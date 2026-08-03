<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit'])) {
	$id = (int) $_POST['id'];
	$dept = $_POST['dept'];
	$name = $_POST['name'];
	$nid = $_POST['nid'];
	$birth = $_POST['birth'];
	$address = $_POST['address'];

	$sql = "UPDATE student SET dept='$dept', name='$name', nid='$nid', birth='$birth', address='$address' WHERE id=$id";
	$conn->query($sql);
	$message = "Student Updated Successfully.";
}

$student = [
	'id' => $id,
	'dept' => '',
	'name' => '',
	'nid' => '',
	'birth' => '',
	'address' => ''
];

if ($id) {
	$result = $conn->query("SELECT * FROM student WHERE id=$id");
	if ($result && $result->num_rows > 0) {
		$student = $result->fetch_assoc();
	}
}
?>

<h2>Update Student</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	<input type="hidden" name="id" value="<?php echo $student['id']; ?>">

	Department<br>
	<input type="text" name="dept" value="<?php echo $student['dept']; ?>"><br><br>

	Name<br>
	<input type="text" name="name" value="<?php echo $student['name']; ?>"><br><br>

	NID<br>
	<input type="text" name="nid" value="<?php echo $student['nid']; ?>"><br><br>

	Birth<br>
	<input type="date" name="birth" value="<?php echo $student['birth']; ?>"><br><br>

	Address<br>
	<input type="text" name="address" value="<?php echo $student['address']; ?>"><br><br>

	<input type="submit" name="submit" value="Update Student">
</form>