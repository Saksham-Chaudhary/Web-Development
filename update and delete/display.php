<?php
include('config.php')
?>

<?php
	$sql = "SELECT * FROM `stud`";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display info</title>
</head>
<body>
	<table border="1px">
					<tr>
						<th>Username</th>
						<th>Email</th>
						<th>Contact</th>
						<th>City</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
	<?php
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {  ?>
					<tr>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['city']; ?></td>
						<td><a href="update.php?id=<?php echo $row['id'] ?>"><input type="button" name="edit" value="Edit"></a></td>
						<td><a href="delete.php?id=<?php echo $row['id'] ?>"><input type="button" id="delete" value="Delete"></a></td>
					</tr>
		<?php	}
		}
		else{
			echo "0 Rows";
		}
	?>
	</table>
</body>
</html>