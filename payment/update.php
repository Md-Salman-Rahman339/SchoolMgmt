<?php
include("../config.php");

$id = isset($_GET['id']) ? (int) $_GET['id'] : (int) ($_POST['id'] ?? 0);
$message = "";

if (isset($_POST['submit'])) {
	$id = (int) $_POST['id'];
	$student_id = $_POST['student_id'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];

	$sql = "UPDATE payment SET student_id='$student_id', amount='$amount', date='$date' WHERE payment_id=$id";
	$conn->query($sql);
	$message = "Payment Updated Successfully.";
}

$payment = [
	'payment_id' => $id,
	'student_id' => '',
	'amount' => '',
	'date' => ''
];

if ($id) {
	$result = $conn->query("SELECT * FROM payment WHERE payment_id=$id");
	if ($result && $result->num_rows > 0) {
		$payment = $result->fetch_assoc();
	}
}
?>

<h2>Update Payment</h2>

<?php if ($message) { echo "<p>$message</p>"; } ?>

<form method="post">
	<input type="hidden" name="id" value="<?php echo $payment['payment_id']; ?>">

	Student ID<br>
	<input type="number" name="student_id" value="<?php echo $payment['student_id']; ?>"><br><br>

	Amount<br>
	<input type="number" step="0.01" name="amount" value="<?php echo $payment['amount']; ?>"><br><br>

	Date<br>
	<input type="date" name="date" value="<?php echo $payment['date']; ?>"><br><br>

	<input type="submit" name="submit" value="Update Payment">
</form>
