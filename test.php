<?php require("include.php");?>
 <?php
 
 

 $sql = "select * from eventtable";
 $result = mysql_query($sql) or die(mysql_error());
 while($row = mysql_fetch_array($result))
 {
	print $row["eventID"];
 }
 ?>
