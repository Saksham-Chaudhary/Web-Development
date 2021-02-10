<!DOCTYPE html>
<html>
<head>
	<title>Sum</title>
	<script type="text/javascript">
		function validate(){
			var n1 = document.sum.num1;
			var n2 = document.sum.num2;
			if (n1.value.length<=0) {
				alert("Enter First Number");
				return false;
			}
			if (n2.value.length<=0) {
				alert("Enter Second Number");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<div align="center">
	<form action="sum.php" method="POST" name="sum">
		Enter the first number<input type="number" name="num1"><br>
		Enter the second number<input type="number" name="num2"><br>
		<input type="submit" name="submit" value="ADD" onclick="return validate()">
	</form>
</div>
<div align="center">
<?php
if (isset($_POST['submit'])) {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum= $num1+$num2; 
	echo "Sum Of Two Numbers : $sum";
	}
?>
</div>
</body>
</html>

