<?php
include("../config.php");

if (isset($_POST['submit'])) {
	$student_id = $_POST['student_id'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];

	$sql = "INSERT INTO payment(student_id,amount,date) VALUES('$student_id','$amount','$date')";
	$conn->query($sql);

	echo "Payment Created Successfully.";
}
?>

<h2>Create Payment</h2>
<form method="post">
	Student ID<br>
	<input type="number" name="student_id"><br><br>

	Amount<br>
	<input type="number" step="0.01" name="amount"><br><br>

	Date<br>
	<input type="date" name="date"><br><br>

	<input type="submit" name="submit" value="Create Payment">
</form>
