<?php require("interface1.php");?>
<?php
	$redirect = $_POST["redirect"]; //value = 'editMain.php'/>
	$type = $_POST["type"];
	$name = $_POST["name"];
	$sql = "select max(displayOrder) as do from tabbing where type = '$type'";
	$result = mysql_query($sql);
	$displayOrder = 0;
	if($row = mysql_fetch_array($result))
	{
		$displayOrder = $row["do"] + 1;
	}
	
	$sql = "insert into tabbing (name, type, textEditorID, displayOrder) values ('$name', '$type', '0', '$displayOrder')";
	mysql_query($sql) or die(mysql_error());
	$tabID = mysql_insert_id();
	
	$textIndex = "";

	print $textIndex;
	$sql = "insert into texteditor (textIndex, textarea) values ('', '')";
	mysql_query($sql);
	$textID = mysql_insert_id();
	
	print $type;
	if($type == "main")
	{
		$textIndex = "atext".$textID;
	}
	else if($type == "wealth")
	{
		$textIndex = "btext". $textID;
	}
	else if($type == "family")
	{
		$textIndex = "ctext".$textID;;
	}
	else if($type == "school")
	{
		$textIndex = "dtext".$textID;;
	}	
	print $textIndex;

	
	$sql = "update texteditor set textIndex = '$textIndex' where textID = '$textID'";
	mysql_query($sql);
	
	$sql = "update tabbing set textEditorID = '$textID' where id = '$tabID'";
	mysql_query($sql);
	
	print "<meta http-equiv='refresh' content='0; url=".$redirect."'>";
?>
<?php require("interface2.php");?>