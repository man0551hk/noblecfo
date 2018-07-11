<?php require("interface1.php");?>
		<?php
			$courseID=$_GET["courseID"];
			$sql = "delete from coursetime where courseID = '$courseID'";
			mysql_query($sql) or die(mysql_error());
			$sql = "delete from course where courseID = '$courseID'";
			mysql_query($sql) or die(mysql_error());
			
		?>
		<meta http-equiv="refresh" content="0; url=course.php">
<?php require("interface2.php");?>