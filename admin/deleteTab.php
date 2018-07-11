<?php require("interface1.php");?>
<?php
$id = $_GET["id"];
$textEditorID = $_GET["textEditorID"];
$redirect = $_GET["redirect"];
$sql = "delete from tabbing where id = '$id'";
mysql_query($sql);
$sql = "delete from texteditor where textID = '$textEditorID'";
mysql_query($sql);
print "<meta http-equiv='refresh' content='0; url=".$redirect.".php'>";
?>
<?php require("interface2.php");?>