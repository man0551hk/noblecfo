<?php require("interface1.php");?>
<?php
$textID = $_POST["textID"];
$redirect = $_POST["redirect"];
if ((($_FILES["image"]["type"] == "image/gif")|| ($_FILES["image"]["type"] == "image/png")|| ($_FILES["image"]["type"] == "image/jpeg")|| ($_FILES["image"]["type"] == "image/jpg")|| ($_FILES["image"]["type"] == "image/pjpeg"))&& ($_FILES["image"]["size"] < 100000000)) 
{
	$path = "../doc/images/";
	if (file_exists($path.$_FILES["image"]["name"])){
		echo $_FILES["image"]["name"] . " already exists. ";
	}
	else
	{
		$fileName = $path.$_FILES["image"]["name"];
		$name = $_FILES["image"]["name"];
		$savelink = "http://www.noblecfo.com/doc/images/".$name;
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $fileName )){
			$sql = "insert into imagelink (name, path, textID) values ('$name', '$savelink', '$textID')";
			mysql_query($sql);
			print "<meta http-equiv='refresh' content='0;url=".$redirect.".php'>";
		}												 
	}
}	
else
{
	print "圖片格式錯誤或檔案大小超過10MB";
}
?>
<?php require("interface2.php");?>