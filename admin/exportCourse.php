<?php
header("Content-type: text/x-csv");
header("Content-Disposition:filename=courseData.csv");
require("include.php");
$courseID=$_GET["courseID"];
$sql = "select * from coursetime where courseID = '$courseID' group by classNum order by id";
$result2 = mysql_query($sql) or die (mysql_error());
while($row2 = mysql_fetch_array($result2))
{
	$classNum = $row2["classNum"];
	$sql3 = "select * from coursetime where courseID = '$courseID' and classNum = '$classNum' order by id";
	$result3 = mysql_query($sql3);
	$counter = 0;
	while($row3 = mysql_fetch_array($result3))
	{
		$classDate = $row3["classDate"];
		//$classTime = $row3["classTime"];
		$classTopic = $row3["classTopic"];
		if($counter == 0)
		{
			$dataText = $classNum.",".$classDate.",".$classTopic;
			echo iconv("UTF-8","big5", $dataText);
		}
		else
		{
			$dataText = ",,".$classTopic;
			echo iconv("UTF-8","big5", $dataText);
		}		
		$counter++;	
	}		
}
?>