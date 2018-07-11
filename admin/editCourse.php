<?php require("interface1.php");?>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.addCss(".cke_editable{background-color: #26163d}");
</script>
<?php
$courseID = $_GET["courseID"];
if(!isset($_GET["courseID"]))
{
	$courseID = $_POST["courseID"];
}

?>
<?php
	if($_POST["action"] == "courseName")
	{		
		$courseName = $_POST["courseName"];
		$sql = "update course set courseName = '$courseName' where courseID = '$courseID'";
		mysql_query($sql);
	}
	if($_POST["action"] == "description")
	{
		$description = $_POST["description"];
		$sql = "update course set description = '$description' where courseID = '$courseID'";
		mysql_query($sql);
	}
	if($_POST["action"] == "uploadTime")
	{
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
					$sql = "delete from coursetime where courseID = '$courseID'";
					mysql_query($sql);			
					
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
						print $classNum." ".$classDate." ".$classTime." ".$classTopic."<br/>";
						$sql = "insert into coursetime (courseID, classNum, classDate, classTime, classTopic) values ('$courseID', '$classNum', '$classDate', '$classTime', '$classTopic')";
						mysql_query($sql);
					}							
					fclose($handle);						 
				}
			}
		}	
	}
	if($_POST["action"] == "time")
	{
		$classNum = $_POST["classNum"];
		$classDate = $_POST["classDate"];
		$classTime = $_POST["classTime"];
		$classTopic = $_POST["classTopic"];
		$id = $_POST["id"];
		$sql = "update coursetime set classNum = '$classNum', classDate = '$classDate', classTime = '$classTime', classTopic = '$classTopic' where id = '$id'";
		mysql_query($sql);		
	}
	if($_POST["action"] == "address")
	{		
		$address = $_POST["address"];
		$sql = "update course set address = '$address' where courseID = '$courseID'";
		mysql_query($sql);
	}	
	if($_POST["action"] == "fee")
	{
		$fee = $_POST["fee"];
		$sql = "update course set fee = '$fee' where courseID = '$courseID'";
		mysql_query($sql);
	}	
	if($_POST["action"] == "requirement")
	{
		$requirement = $_POST["requirement"];
		$sql = "update course set requirement = '$requirement' where courseID = '$courseID'";
		mysql_query($sql);
	}		
	if($_POST["action"] == "material")
	{
		$material = $_POST["material"];
		$sql = "update course set material = '$material' where courseID = '$courseID'";
		mysql_query($sql);
	}		
?>
<div class="block">	
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">課程名稱</a>
	<div class="block-body">
		<form action = 'editCourse.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = 'courseName'>
			<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
			<textarea name="courseName" id="courseName" rows="10" cols="80">
			<?php
				$sql = "select courseName from course where courseID = '$courseID'";
				$result = mysql_query($sql);
				if($row = mysql_fetch_array($result))
				{
					print $row["courseName"];
				}
			?>	
			</textarea>
				<script>
					CKEDITOR.replace( 'courseName' );					
				</script>				
			<input type = 'submit' value = '修改' />
		</form>
	</div>
</div>
	<div class="block">	
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">課程目的</a>
		<div class="block-body">
			<form action = 'editCourse.php' method = 'POST'>
				<input type = 'hidden' name = 'action' value = 'description'>
				<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>			
				
				<textarea name="description" id="description" rows="10" cols="80">
				<?php
					$sql = "select description from course where courseID = '$courseID'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["description"];
					}
				?>
				</textarea>
				<script>
					CKEDITOR.replace( 'description' );					
				</script>	
				<input type = 'submit' value = '修改' />
			</form>			
		</div>
	</div>
<div class="block">	
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">內容及時間</a>
	        <div id="tablewidget" class="block-body collapse out">
		<form action = 'editCourse.php' enctype="multipart/form-data" method = 'POST'>
			<input type = 'hidden' name = 'action' value = 'uploadTime'>
			<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
			課程時間表<input type = 'file' name = 'courseData' />
			<input type = 'submit' value = '重新上傳' />
		</form>
		<table class="table">
			<thead>
				<tr>
					<th>日期</th>
					<th>時間</th>
					<th>主題</th>
					<th></th>
				</tr>
				<tbody>
					<?php
						$sql = "select * from coursetime where courseID = '$courseID'";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{
							print "<tr>";
								print "<form action = 'editCourse.php' method = 'POST'>";
								print "<input type = 'hidden' name = 'action' value = 'time'>";
								print "<input type = 'hidden' name = 'courseID' value = '".$courseID."'>";
								print "<input type = 'hidden' name = 'id' value = '".$row["id"]."'>";
								print "<td>";
								print "<input type = 'text' name = 'classNum' value = '".$row["classNum"]."'><br/>";
								print "<input type = 'text' name = 'classDate' value = '".$row["classDate"]."'>";
								print "</td>";
								print "<td>";
								print "<input type = 'text' name = 'classTime' value = '".$row["classTime"]."'>";
								print "</td>";
								print "<td>";
								print "<input type = 'text' name = 'classTopic' value = '".$row["classTopic"]."'>";
								print "</td>";
								print "<td>";
								print "<input type = 'submit' value = '修改'>";
								print "</td>";
								print "</form>";
							print "</tr>";
						}
					?>
				</tbody>				
			</thead>
		</table>	
	</div>
</div>

<div class="block">	
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">地點</a>
	<div class="block-body">
		<form action = 'editCourse.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = 'address'>
			<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
			<textarea name="address" id="address" rows="10" cols="80">
			<?php
				$sql = "select address from course where courseID = '$courseID'";
				$result = mysql_query($sql);
				if($row = mysql_fetch_array($result))
				{
					print $row["address"];
				}
			?>	
			</textarea>
			<script>
				CKEDITOR.replace( 'address' );
			</script>			
			<input type = 'submit' value = '修改' />
		</form>
	</div>
</div>

	<div class="block">	
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">課程費用</a>
		<div class="block-body">
			<form action = 'editCourse.php' method = 'POST'>
				<input type = 'hidden' name = 'action' value = 'fee'>
				<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
				<textarea name="fee" id="fee" rows="10" cols="80">
				<?php
					$sql = "select fee from course where courseID = '$courseID'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["fee"];
					}
				?>
				</textarea>
				<script>
					CKEDITOR.replace( 'fee' );
				</script>	
				<input type = 'submit' value = '修改' />
			</form>			
		</div>
	</div>
	
	<div class="block">	
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">課程要求</a>
		<div class="block-body">
			<form action = 'editCourse.php' method = 'POST'>
				<input type = 'hidden' name = 'action' value = 'requirement'>
				<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
				<textarea name="requirement" id="requirement" rows="10" cols="80">
				<?php
					$sql = "select requirement from course where courseID = '$courseID'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["requirement"];
					}
				?>
				</textarea>
				<script>
					CKEDITOR.replace( 'requirement' );
				</script>	
				<input type = 'submit' value = '修改' />
			</form>			
		</div>
	</div>
	
	<div class="block">	
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">上堂必需品</a>
		<div class="block-body">
			<form action = 'editCourse.php' method = 'POST'>
				<input type = 'hidden' name = 'action' value = 'material'>
				<input type = 'hidden' name = 'courseID' value = '<?php print $courseID;?>'>
				<textarea name="material" id="material" rows="10" cols="80">
				<?php
					$sql = "select material from course where courseID = '$courseID'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["material"];
					}
				?>
				</textarea>
				<script>
					CKEDITOR.replace( 'material' );
				</script>	
				<input type = 'submit' value = '修改' />
			</form>			
		</div>
	</div>	
<?php require("interface2.php");?>