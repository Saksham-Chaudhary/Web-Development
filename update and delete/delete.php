<?php
include('config.php')
?>
<?php
	    $iduser = $_GET['id'];
	    $sql1 = "DELETE FROM `stud` WHERE `stud`.`id` = '$iduser'";
	    $result = mysqli_query($conn,$sql1);
	    if ($result) {
	    		echo "<script>alert('Record Deleted')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/display.php">
                <?php
            }
            else{
            	echo "<script>alert('Record Not Deleted')</script>";
                ?>
                <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/web/display.php">
                <?php
            }
?>