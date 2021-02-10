<?php
include('config.php')
?>
<?php
    $iduser = $_GET['id'];
    $sql1 = "SELECT * FROM `users1` WHERE `users1`.`id` = '$iduser'";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();

    if (isset($_POST['submit'])) {
            $username1 = $_POST['username'];
            $email1 = $_POST['email'];
            $gender1 = $_POST['gender'];
            $city1 = $_POST['city'];

            $sql2 = "UPDATE `users1` SET `username` = '$username1', `email` = '$email1', `gender` = '$gender1', `city` = '$city1' WHERE `users1`.`id` = '$iduser'";
            $data = mysqli_query($conn, $sql2);
            if ($data) {
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/assignment3/display.php">
                <?php
            }
            else{
                echo "<script>alert('Record Not Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/assignment3/display.php">
                <?php
            }

    }
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <div align="center">
        <h2>Update Info</h2>
        <table>
        <form action="" method="POST">
        <tr><td>Name</td><td colspan="2"><input type="text" name="username" value="<?php echo $row['username']; ?>"></td></tr>
        <tr><td>E-Mail</td><td colspan="2"><input type="email" name="email" value="<?php echo $row['email']; ?>"></td></tr>
        <tr><td>Gender</td><td><input type="radio" name="gender" value="Male" <?php if($row['gender']=='Male'){echo "checked";} ?>>Male</td><td><input type="radio" name="gender" value="Female" <?php if($row['gender']=='Female'){echo "checked";} ?>>Female</td></tr>
        <tr><td>City</td><td><select  name="city">
                        <option value="<?php echo $row['city'] ?>" selected><?php echo $row['city'] ?></option>
              			<option  value="dehradun">dehradun</option>
         				<option value="delhi">delhi</option>
         				<option value="shimla">shimla</option>
         				<option value="lukhnow">lukhnow</option>
         				<option value="pune">pune</option>
         				<option value="chandigarh">chandigarh</option>
         				<option value="amritsar">amritsar</option>
         				<option value="jalandhar">jalandhar</option>
         				<option value="gurugram">gurugram</option>
         				<option value="patna">patna</option>
                 </select></td></tr>       
        <tr><td></td><td><input type="submit" name="submit" value="UPDATE"></td></tr>
    </form>
        </table>
   </div>

</body>

</html>