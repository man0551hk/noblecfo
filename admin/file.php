<?php require("interface1.php");?>
<?php
	if($_POST["action"] == "new")
	{
		$path = "../doc/";
		if (file_exists($path.$_FILES["doc"]["name"])){
			echo $_FILES["doc"]["name"] . " already exists. ";
		}
		else
		{
			$fileName = $path.$_FILES["doc"]["name"];
			$name = $_FILES["doc"]["name"];
			$path = "doc/".$_FILES["doc"]["name"];
			if(move_uploaded_file($_FILES["doc"]["tmp_name"], $fileName )){										
				$sql = "insert into file (name, path, display) values ('$name', '$path', '0')";
				mysql_query($sql);
			}
		}
	}
	if($_POST["action"] == "edit")
	{
		
		$id =$_POST["id"];
		$take = $_POST["take"];
		$display = 0;
		$path = $_POST["path"];
		if(isset($_POST["display"]))
		{
			$display = 1;
		}
		
		if($take == "修改")
		{
			$sql = "update file set display = '$display' where id = '$id'";
			mysql_query($sql);
		}
		else if($take == "刪除")
		{
			unlink("../".$path);
			$sql = "delete from file where id = '$id'";
			mysql_query($sql);
		}
	}
?>
	<div class="block">			
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">文件</a>
		<div class="block-body">
			<form action = 'file.php' enctype="multipart/form-data" method = 'POST'>
				<input type = 'hidden' value = 'new' name = 'action'>
				<input type = 'file' name = 'doc' />
				<input type = 'submit' value = '新增'/>
			</form>
			<table class = "table">
				<thead>
				<tr>
					<td>名稱</td>
					<td>顯示</td>
				</tr>
				</thead>
				<tbody>
					<?php
						$sql = "select * from file order by id desc";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{
							print "<tr>";
							print "<form action = 'file.php' method = 'POST'>";
								print "<input type = 'hidden' value = 'edit' name = 'action'>";
								print "<input type = 'hidden' value = '".$row["id"]."' name = 'id'>";
								print "<input type = 'hidden' value = '".$row["path"]."' name = 'path'>";								
								print "<td><a href = '../".$row["path"]."' target = '_blank'>".$row["name"]."</a></td>";
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
									print "<input type = 'submit' value = '修改' name = 'take'>";
									print "<input type = 'submit' value = '刪除' name = 'take'>";
								print "</td>";
							print "</form>";
							print "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php require("interface2.php");?>