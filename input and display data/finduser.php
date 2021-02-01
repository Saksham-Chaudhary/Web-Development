<?php
include('config.php')
?>

<?php
if (isset($_POST['submit'])) {

	$finduser = $_POST['finduser'];
	$displaysql2 = "SELECT users.username, email, branch, city, year from users,student WHERE users.username=student.username AND users.username='$finduser'";
    $result2 = $conn->query($displaysql2);
}

?>

<html>

<head>
    <title>Find a user from database</title>
</head>
<body>
	<form action="finduser.php" method="POST">
		Enter the name of the user<input type="text" name="finduser"><br>
		<input type="submit" name="submit">
	</form>
	<?php
	  if (isset($_POST['submit'])) {  ?>
	  	
	  <table>
    	<tr><th>Username</th><th>Email</th><th>City</th><th>Branch</th><th>year</th></tr>
    	<?php
    		if ($result2->num_rows > 0) {
    			while($row = $result2->fetch_assoc()) { ?>
    			<tr>
    				<td><?php echo $row["username"]; ?></td>
    				<td><?php echo $row["email"]; ?></td>
    				<td><?php echo $row["city"]; ?></td>
    				<td><?php echo $row["branch"]; ?></td>
    				<td><?php echo $row["year"]; ?></td>
    			</tr>
    	<?php } 
       }else{
       		echo "0 results";
       	}
       }
    	 ?>
       
    </table>

</body>
</html>
