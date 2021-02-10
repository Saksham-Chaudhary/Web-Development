<?php
include('config.php')
?>

<?php
if (isset($_POST['submit'])) {

	$finduser = $_POST['finduser'];
	$displaysql2 = "SELECT * from users1 WHERE  users1.username='$finduser'";
    $result2 = $conn->query($displaysql2);
}

?>

<html>

<head>
    <title>Find a user from database</title>
</head>

<body>
    <div align="center">
	<form action="finduser.php" method="POST">
		Enter the name of the user<input type="text" name="finduser"><br>
		<input type="submit" name="submit">
	</form>
	<?php
	  if (isset($_POST['submit'])) {  ?>
	  	
	  
    	<?php
    		if ($result2->num_rows > 0) { ?>
                <table border="1px">
        <tr><th>Username</th><th>Email</th><th>Gender</th><th>City</th><th>Edit</th><th>Delete</th></tr>
    		<?php	while($row = $result2->fetch_assoc()) { ?>
    			<tr>
    				<td><?php echo $row["username"]; ?></td>
    				<td><?php echo $row["email"]; ?></td>
    				<td><?php echo $row["gender"]; ?></td>
    				<td><?php echo $row["city"]; ?></td>
                    <td><a href="update.php?id=<?php echo $row["id"]; ?>"><input type="button" name="edit" value="Edit"></a></td>
                    <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick='return confirmation()'></a></td>
    			</tr>
    	<?php } 
       }else{
       		echo "No User Found";
       	}
       }
    	 ?>
       
    </table>
    <script>
    function confirmation(){
        var x = confirm('Are you sure you want to delete this record');
        if (x==true) {
            return true;
        }
        else
        {
            window.location.href = 'http://localhost/web/assignment3/display.php';      
        }
        return false;
    }
</script>
</div>
</body>
</html>
