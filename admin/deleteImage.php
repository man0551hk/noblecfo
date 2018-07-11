<?php require("interface1.php");?>
<?php
	$id = $_GET["id"];
	$redirect = $_GET["redirect"];
	
	$sql = "select * from imagelink where id = '$id'";
	$result = mysql_query($sql);
	if($row = mysql_fetch_array($result))
	{
		$path = $row["path"];
		$path = str_replace("http://www.noblecfo.com/", "../", $path);
		try {
			unlink($path);
		} 
		catch (Exception $e) {
			
		}
		$sql = "delete from imagelink where id = '$id'";
		mysql_query($sql);
	}	
?>
<meta http-equiv="refresh" content="0; url=<?php print $redirect.'.php';?>">
<?php require("interface2.php");?>
