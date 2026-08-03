<?php
include("../config.php");

$result = $conn->query("SELECT * FROM course ORDER BY id DESC");
?>

<h2>Course Records</h2>
<table border="1" cellpadding="8" cellspacing="0">
	<tr>
		<th>ID</th>
		<th>Department</th>
		<th>Title</th>
		<th>Credit</th>
		<th>Syllabus</th>
		<th>Actions</th>
	</tr>
	<?php while ($row = $result->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['dept']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['credit']; ?></td>
		<td><?php echo $row['syllabus']; ?></td>
		<td>
			<a href="update.php?id=<?php echo $row['id']; ?>">Update</a> |
			<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>

<p><a href="create.php">Create New Course</a></p>
