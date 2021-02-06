<?php
include('config.php')
?>
<?php
    $iduser = $_GET['id'];
    $sql1 = "SELECT * FROM `stud` WHERE `stud`.`id` = '$iduser'";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();

    if (isset($_POST['submit'])) {
            $username1 = $_POST['username'];
            $email1 = $_POST['email'];
            $contact1 = $_POST['contact'];
            $city1 = $_POST['city'];

            $sql2 = "UPDATE `stud` SET `username` = '$username1', `email` = '$email1', `contact` = '$contact1', `city` = '$city1' WHERE `stud`.`id` = '$iduser'";
            $data = mysqli_query($conn, $sql2);
            if ($data) {
                echo "<script>alert('Record Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/display.php">
                <?php
            }
            else{
                echo "<script>alert('Record Not Updated')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/display.php">
                <?php
            }

    }
?>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <form action="" method="POST">
        Name<input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
        E-Mail<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Contact<input type="number" name="contact" value="<?php echo $row['contact']; ?>"><br>
        City<select  name="city">
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
                 </select><br>       
        <input type="submit" name="submit" value="SUBMIT">
    </form>

   

</body>

</html>