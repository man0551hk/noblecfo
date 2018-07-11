<?php require("interface1.php");?>

<?php
function _convert($content) { 
    if(!mb_check_encoding($content, 'UTF-8') 
        OR !($content === mb_convert_encoding(mb_convert_encoding($content, 'UTF-32', 'UTF-8' ), 'UTF-8', 'UTF-32'))) { 

        $content = mb_convert_encoding($content, 'UTF-8'); 

        if (mb_check_encoding($content, 'UTF-8')) { 
            // log('Converted to UTF-8'); 
        } else { 
            // log('Could not converted to UTF-8'); 
        } 
    } 
    return $content; 
} 
?>
<?php
	if(isset($_POST["action"]))
	{
		if($_POST["action"] == "display")
		{			
			if(isset($_POST["display"]))
			{
				$isDisplay = 1;
			}
			else
			{
				$isDisplay = 0;
			}
			$courseID = $_POST["courseID"];
			
			$sql = "update course set display = '$isDisplay' where courseID = '$courseID'";
			mysql_query($sql) or die (mysql_error());
		}		
	
		else if(isset($_POST["action"]) && $_POST["action"] = "uploadData")
		{		
			if(!isset($_POST["courseName"]) || $_POST["courseName"] == "")
			{
				$courseNameError = "Please input course Name";
			}
			else
			{
				$courseName = $_POST["courseName"];
			}
			
			if ($_FILES["courseData"]["type"] == "application/vnd.ms-excel" || $_FILES["courseData"]["type"] == "application/octet-stream") {
				$delPath = "courseData.csv";
				unlink($delPath);				
				if (file_exists($path.$_FILES["courseData"]["name"])){
					echo $_FILES["courseData"]["name"] . " already exists. ";
				}
				else
				{
					$fileName = "courseData.csv";
					if(move_uploaded_file($_FILES["courseData"]["tmp_name"], $fileName )){
						$sql = "insert into course (courseName) values ('$courseName')";
						mysql_query($sql);
						$courseID = mysql_insert_id();
						
						$handle = fopen("courseData.csv", "r");
						$classNum = "";
						$classDate = "";
						$classTime = "";
						$classTopic = "";
						while ($line = fgets($handle)) {
							//$data[] = array_combine($header, $line);
							$dataString = iconv("big5","UTF-8", $line);
							$data = explode(",", $dataString);
							//print $data[0]." ".$data[1]." ".$data[2]." ".$data[3]."<br/>";
							if($data[0] != "")
							{
								$classNum = $data[0];
							}
							if($data[1] != "")
							{
								$classDate = $data[1];
							}
							$classTime = $data[2];
							$classTopic = $data[3];
							//print $classNum." ".$classDate." ".$classTime." ".$classTopic."<br/>";
							$sql = "insert into coursetime (courseID, classNum, classDate, classTime, classTopic) values ('$courseID', '$classNum', '$classDate', '$classTime', '$classTopic')";
							mysql_query($sql);
						}							
						fclose($handle);						 
					}
				}
			}			
		}			
	}
?>


	<div class="block">			
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">新增課程資料</a>
		<div class="block-body">
			<form action = "course.php" enctype="multipart/form-data" method = 'POST'>				
				課程名稱<input type = 'text' name = 'courseName' size = '500'>	
				<?php print $courseNameError; ?>
				<br/>
				<input type = 'hidden' name = 'action' value = 'uploadData'>
				<a href = 'export.php'>下載範例</a>
				課程時間表<input type = 'file' name = 'courseData' />
				<?php print $courseDataError;?>
				<br/>
				<input type = 'submit' value = '新增' />
				(其他資料稍後輸入)
			</form>
		</div>
		<?php

		?>
	</div>
	<div class="block">			
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">新增課程資料</a>
		<div class="block-body">
			<table class = "table">
				<tbody>
					<tr>
						<td>課程名稱</td>
						<td>顯示</td>
						<td></td>
				</tbody>
				<tbody>
					<?php
						$sql = "select * from course order by courseID desc";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{
							print "<form action = 'course.php' method = 'POST'>";
							print "<input type = 'hidden' value = 'display' name = 'action'>";
							print "<input type = 'hidden' value = '".$row["courseID"]."' name = 'courseID'>";
							print "<tr>";
								print "<td><a href = 'viewCourse.php?courseID=".$row["courseID"]."'>".str_replace("#FFFFFF", "black", $row["courseName"])."</font></td>";
								print "<td>";
								if($row["display"] == "1")
								{
									print "<input type = 'checkbox' value = '1' name = 'display' checked>";
								}
								else
								{
									print "<input type = 'checkbox' value = '1' name = 'display'>";
								}
								print "</td>";
								print "<td>";	
									print "<input type = 'submit' value = '修改'>&nbsp;&nbsp;";
									print "<a href = 'exportCourse.php?courseID=".$row["courseID"]."'>下載</a>";
									print "&nbsp;&nbsp;<a href = 'editCourse.php?courseID=".$row["courseID"]."'>修改詳細資料</a>";
									print "&nbsp;&nbsp;<a href = 'deleteCourse.php?courseID=".$row["courseID"]."'>刪除</a>";									
								print "</td>";
							print "</tr>";
							print "</form>";
						}		
					?>
				</tbody>
			</table>
		</div>
	</div>
		
<?php require("interface2.php");?>