<?php
include("../config.php");

$result = $conn->query("SELECT * FROM payment ORDER BY payment_id DESC");
?>

<h2>Payment Records</h2>
<table border="1" cellpadding="8" cellspacing="0">
	<tr>
		<th>Payment ID</th>
		<th>Student ID</th>
		<th>Amount</th>
		<th>Date</th>
		<th>Actions</th>
	</tr>
	<?php while ($row = $result->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $row['payment_id']; ?></td>
		<td><?php echo $row['student_id']; ?></td>
		<td><?php echo $row['amount']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td>
			<a href="update.php?id=<?php echo $row['payment_id']; ?>">Update</a> |
			<a href="delete.php?id=<?php echo $row['payment_id']; ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<p><a href="create.php">Create New Payment</a></p>
