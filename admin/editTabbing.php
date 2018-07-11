<?php require("interface1.php");?>
<?php
$id = $_POST["id"];
$type = $_POST["type"];
$name = $_POST["name"];
$displayOrder = $_POST["displayOrder"];
$textEditorID = $_POST["textEditorID"];
$redirect = $_POST["redirect"];

$sql = "update tabbing set name = '$name', textEditorID = '$textEditorID' where id = '$id'";
mysql_query($sql);

$originDisplayOrder = "";
$sql = "select displayOrder from tabbing where id = '$id'";
$result = mysql_query($sql);
if($row = mysql_fetch_array($result))
{
	$originDisplayOrder = $row["displayOrder"];	
}

if( $displayOrder > $originDisplayOrder)
{
	$sql = "update tabbing set displayOrder = displayOrder - 1 where type = '$type' and displayOrder between '$originDisplayOrder' and '$displayOrder'";
	mysql_query($sql) or die (mysql_error());
	$sql = "update tabbing set displayOrder = '$displayOrder' where id ='$id'";
	mysql_query($sql);
}
else
{
	$sql = "update tabbing set displayOrder = displayOrder + 1 where type = '$type' and displayOrder between '$displayOrder' and '$originDisplayOrder'";
	mysql_query($sql);
	$sql = "update tabbing set displayOrder = '$displayOrder' where id ='$id'";
	mysql_query($sql);
}

print "<meta http-equiv='refresh' content='0; url=".$redirect."'>";
?>
<?php require("interface2.php");?>