<?php
include('config.php')
?>
<?php
        error_reporting(0);
	    $iduser = $_GET['id'];
	    $sql1 = "DELETE FROM `users1` WHERE `users1`.`id` = '$iduser'";
	    $result = mysqli_query($conn,$sql1);
	    if ($result) {
	    		echo "<script>alert('Record Deleted')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/assignment3/display.php">
                <?php
            }
            else{
            	echo "<script>alert('Record Not Deleted')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/assignment3/display.php">
                <?php
            }
?>