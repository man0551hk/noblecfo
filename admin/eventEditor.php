<?php require("interface1.php");?>
<script src="ckeditor/ckeditor.js"></script>
<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">講座資料設定</a>
	<div class="block-body">
		<form action = "eventEditor.php" enctype="multipart/form-data" method = 'POST'>
			<input type = 'hidden' name = 'action1' value = 'action'>
			
			<input type = 'file' name = 'eventImage'>
			<input type = 'submit' value = '上載'/>
		</form>
		<a href = "../images/eventImage.jpg" target = "_blank">View Image</a>
		<?php
			$path = "../images/";
			if(isset($_POST["action1"]))
			{
				if (( ($_FILES["eventImage"]["type"] == "image/png") || ($_FILES["eventImage"]["type"] == "image/jpeg")|| ($_FILES["eventImage"]["type"] == "image/jpg")|| ($_FILES["eventImage"]["type"] == "image/pjpeg"))&& ($_FILES["eventImage"]["size"] < 100000000)) {
					$delPath = "../images/eventImage.jpg";
					unlink($delPath);				
					if (file_exists($path.$_FILES["eventImage"]["name"])){
						echo $_FILES["eventImage"]["name"] . " already exists. ";
					}
					else
					{

						$fileName = "../images/eventImage.jpg";
						if(move_uploaded_file($_FILES["eventImage"]["tmp_name"], $fileName )){
							echo "Upload Successful";
						}
					}
				}	
			}
		?>
		<br/><br/>
		
		<?php
			if($_POST["action"] == "info")
			{
				$info = $_POST["info"];				
				$sql = "update texteditor set textarea = '$info' where textID = '28'";
				mysql_query($sql);				
			}
		?>
		講座資料:
		<form action = "eventEditor.php" method = 'POST'>
			<input type = 'hidden' name = 'action' value = 'info'>
			<textarea name="info" id="info" rows="10" cols="80">
				<?php
					$sql = "select * from texteditor where textID = '28'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["textarea"];
					}
				?>
			</textarea>		
			<input type = 'submit' value = '修改'>
			<script>
				CKEDITOR.replace( 'info', { 
								enterMode: CKEDITOR.ENTER_BR, 
								on: {'instanceReady': function (evt) {    }},
							});     	
			</script>
		</form>
		
		<br/><br/>
		<b>新增講座</b>
		<form action = "eventEditor.php" method = "POST">
			<input type = 'hidden' value = 'action' name = 'action2' />
			講座名稱<input type = "text" name = "name"><br/>
			日期1<input type = "text" name = "date"><br/>
			時間1<input type = "text" name = "time"><br/>
			地址1<input type = "text" name = "address"><br/>
			日期2<input type = "text" name = "date2"><br/>
			時間2<input type = "text" name = "time2"><br/>
			地址2<input type = "text" name = "address2"><br/>
			講者<input type = "text" name = "author"><br/>
			<input type = "submit" name = "新增">
		</form>
		<?php
			if(isset($_POST["action2"]))
			{
				$name = $_POST["name"];
				$date = $_POST["date"];
				$time = $_POST["time"];
				$address = $_POST["address"];
			
				$date2 = $_POST["date2"];
				$time2 = $_POST["time2"];	
				$address2 = $_POST["address2"];
				
				$author = $_POST["author"];
				if($name != "" && $date != "" && $time != "")
				{
					$sql = "insert into eventtable (name, date, time, address, date2, time2, address2, author, display) values ('$name', '$date', '$time', '$address', '$date2', '$time2', '$address2', '$author', '0')";
					mysql_query($sql) or die (mysql_error());
					?>
					<script>
					window.location = "eventEditor.php";
					</script>
					<?php
				}
			}
		?>
		
		
		
	</div>
</div>
<div class="block">
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">講座資料</a>
	<div class="block-body">
		<table class = "table">
		<tbody>
			<tr>
				<td>講座名稱</td>
				<td>日期1/時間1</td>				
				<td>地址1</td>
				<td>日期2/時間2</td>	
				<td>地址2</td>			
				<td>講者</td>
				<td>顯示</td>
			</tr>
		<?php
			$sql = "select * from eventtable order by eventID desc";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				print "<tr>";
				print "<form action = 'eventEditor.php' method = 'POST'>";
				print "<input type = 'hidden' value = 'action' name = 'action3'>";
				print "<input type = 'hidden' value = '".$row["eventID"]."' name = 'eventID'>";
				print "<td>";
				print "<input type = 'text' name = 'name' value = '".$row["name"]."'>";				
				print "</td>";	
				print "<td>";				
				print "<input type = 'text' name = 'date' value = '".$row["date"]."'>";
				print  "<br/>/</br/>";
				print "<input type = 'text' name = 'time' value = '".$row["time"]."'>";				
				print "</td>";
				print "<td>";
				print "<input type = 'text' name = 'address' value = '".$row["address"]."'>";				
				print "</td>";		
				print "<td>";
				print "<input type = 'text' name = 'date2' value = '".$row["date2"]."'>";				
				print  "<br/>/</br/>";
				print "<input type = 'text' name = 'time2' value = '".$row["time2"]."'>";				
				print "</td>";
				print "<td>";
				print "<input type = 'text' name = 'address2' value = '".$row["address2"]."'>";				
				print "</td>";			
				print "<td>";
				print "<input type = 'text' name = 'author' value = '".$row["author"]."'>";
				print "</td>";
				print "<td>";
				print "<input type = 'checkbox' name = 'display' ";
				if($row["display"] == "1")
				{
					print "checked";
				}
				print ">";
				print "</td>";
				print "<td>";
				print "<input type = 'submit' value = '修改'>";
				print "</td>";
				print "</form>";
				print "</tr>";
			}
		?>
		</tbody>
		</table>
	</div>
	<?php 
		if(isset($_POST["action3"]))
		{
			$eventID = $_POST["eventID"];
				$name = $_POST["name"];
				$date = $_POST["date"];
				$time = $_POST["time"];
				$address = $_POST["address"];
			
				$date2 = $_POST["date2"];
				$time2 = $_POST["time2"];	
				$address2 = $_POST["address2"];
				
				$author = $_POST["author"];
			$display = 0;
			if(isset($_POST["display"]))
			{
				$display = 1;
			}
			$sql = "update eventtable set name = '$name', date = '$date', time = '$time', address = '$address', display = '$display', author = '$author' where eventID = '$eventID'";
			mysql_query($sql);
			$sql = "update eventtable set date2 = '$date2', time2 = '$time2', address2 = '$address2' where eventID = '$eventID'";
			mysql_query($sql);			
			?>
			<script>
				window.location = "eventEditor.php";
			</script>
			<?php			
		}
	?>
</div>
<?php require("interface2.php");?>