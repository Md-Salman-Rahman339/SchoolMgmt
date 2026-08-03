<?php
include("../config.php");

$result = $conn->query("SELECT * FROM teacher ORDER BY id DESC");
?>

<h2>Teacher Records</h2>
<table border="1" cellpadding="8" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Department</th>
		<th>NID</th>
		<th>Birth</th>
		<th>Address</th>
		<th>Actions</th>
	</tr>
	<?php while ($row = $result->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['dept']; ?></td>
		<td><?php echo $row['nid']; ?></td>
		<td><?php echo $row['birth']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td>
			<a href="update.php?id=<?php echo $row['id']; ?>">Update</a> |
			<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<p><a href="create.php">Create New Teacher</a></p>
