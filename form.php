
<html>

<head>
    <title>Form</title>
</head>

<body>
    <form action="form.php" method="POST">
        Name<input type="text" name="name" placeholder="Your Name" required><br>
        E-Mail<input type="email" name="email" placeholder="Mail@example.com" required><br>
        Contact<input type="text" name="number" placeholder="Contact Number" minlength="10" maxlength="10" required><br>
        City<input type="text" name="city" placeholder="City" required><br>
        Course<input type="text" name="course" placeholder="Course" required><br>
        Interest<input type="text" name="interest" placeholder="Interests" required><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php
    if (isset($_POST['submit'])) { ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th>Interest</th>
        </tr>
        <tr>
            <td><?php echo $_POST['name']?>
            </td>
            <td><?php echo $_POST['email']?>
            </td>
            <td><?php echo $_POST['number']?>
            </td>
            <td><?php echo $_POST['city']?>
            </td>
            <td><?php echo $_POST['course']?>
            </td>
            <td><?php echo $_POST['interest']?>
            </td>
        </tr>
    </table>
    <?php } ?>

</body>

</html>