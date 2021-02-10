<?php
include('config.php')
?>
<?php
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];

            $sql = "INSERT INTO `users1` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
             mysqli_query($conn, $sql);


    }
?>
<html>

<head>
    <title>Form</title>
    <script type="text/javascript">
        function validate(){
            var na=document.form1.username;
            var em=document.form1.email;
            var ge=document.form1.gender;
            var ci=document.form1.city;
              if (na.value.length<=0) {
                alert("Please Enter a Name");
                na.focus();
                return false;
           }
             if (em.value.length<=0) {
                alert("Please Enter a Email");
                em.focus();
                return false;
           }
         
            if (ci.value=="Select City") {
                alert("Please Select a city");
                ci.focus();
                return false;
           }
             var check=false;
           for(var i = 0 ; i<ge.length;i++){
            if (ge[i].checked) {
                check=true;
                break;
            }
           }
             if (!check) {
                alert("Please Select a Gender");
                return false;
           }
           return true;
        }
    </script>
</head>

<body>
    <div align="center">
        <table>
    <form action="input.php" method="POST" name="form1">
        <tr><td>Name</td><td colspan="2"><input type="text" name="username" id="username"></td></tr>
        <tr><td>E-Mail</td><td colspan="2"><input type="email" name="email" id="email"></td></tr>       
        <tr><td>City</td><td colspan="2"><select  name="city" id="city">
                        <option value="Select City" selected>Select City</option>
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
        <tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male</td><td><input type="radio" name="gender" value="Female">Female</td></tr>     
        <tr><td></td><td colspan="2" ><input type="submit" name="submit" value="SUBMIT" onclick=" return validate()"></td></tr>
    </form>
</table><br><br>

    Click here to display user info<a href="display.php"><button name="display" value="Display Users">Display</button></a>

   
</div>
</body>

</html>