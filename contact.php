<?php require("interface1.php");?>

<?php
	$sql = "select textarea from textEditor where textindex like 'etext%' order by textID ASC";
	$result = mysql_query($sql);
	$numOfText = mysql_num_rows($result);
		$index = 0;
	for($i=0; $i<$numOfText; $i++) {
		$row2 = mysql_fetch_array($result);
		$row[$i] = $row2[textarea];
	}
?>

<div id="content">
	<h2>聯絡資訊</h2>
               
                
 	<div class="col_w960">
		<?php print "$row[$index]"; $index++; ?>		<!--Editor 27-->
	</div>                
    <div class="cleaner"></div>
</div>
<div class="cleaner"></div>                
<?php require("interface2.php");?>