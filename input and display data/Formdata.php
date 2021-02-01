<?php
include('config.php')
?>
<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $branch = $_POST['branch'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    $sql2 = "INSERT INTO `student` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql2);
}
else{
	echo "Click Submit....";
}
?>

<?php
	$displaysql = "SELECT users.username, email, branch, city, year from users,student WHERE users.username=student.username";
$result = $conn->query($displaysql);
?>


<html>

<head>
    <title>Input into database</title>
</head>

<body>
    <form action="Formdata.php" method="POST">
        Name<input type="text" name="username" placeholder="Your Name" required><br>
        E-Mail<input type="email" name="email" placeholder="Mail@example.com" required><br>
        Gender<input type="radio" name="gender" value="MALE">Male<input type="radio"  name="gender" value="FEMALE">female<br>
        City<select  name="city">
              			<option  value="dehradun" selected>dehradun</option>
         				<option value="delhi">delhi</option>
         				<option value="shimla">shimla</option>
         				<option value="lukhnow">lukhnow</option>
         				<option value="pune">pune</option>
         				<option value="chandigarh">chandigarh</option>
         				<option value="amritsar">amritsar</option>
         				<option value="jalandhar">jalandhar</option>
         				<option value="gurugram">gurugram</option>
         				<option value="patna">patna</option>
         			</select><br>
         Branch<input type="text" name="branch" required><br>
         Year<input type="text" name="year" required><br><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form> 
    <div>
    <table>
    	<tr><th>Username</th><th>Email</th><th>City</th><th>Branch</th><th>year</th></tr>
    	<?php
    		if ($result->num_rows > 0) {
    			while($row = $result->fetch_assoc()) { ?>
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
    	 ?>
       
    </table>
</div>

</body>

</html>

