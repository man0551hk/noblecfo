<?php require("interface1.php");?>
	<?php
		if(isset($_POST["action"]))
		{
			$action = $_POST["action"];
			$adminID = $_POST["adminID"];
			$loginID = $_POST["loginID"];
			$password = $_POST["password"];
			
			if($action == "edit")
			{
				$sql = "update admin set loginID = '$loginID', password = '$password' where adminID = '$adminID'";
				mysql_query($sql);
			}
			else if($action == "add")
			{
				$sql = "insert into admin (loginID, password) values ('$loginID', '$password')";
				mysql_query($sql);
			}
		}
	?>

	<div class="block">			
		<a href="#tablewidget" class="block-heading" data-toggle="collapse">管理員設定</a>
		<div class="block-body">
			<table class = "table">
				<tbody>
					<tr>
						<td>登入電郵</td>
						<td>密碼</td>
						<td></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<form action = 'adminSetting.php' method = 'POST'>
							<input type = 'hidden' value = 'add' name = 'action'>
							<td><input type = 'text' name = 'loginID'></td>
							<td><input type = 'password' name = 'password'></td>
							<td><input type = 'submit' value = '新増'/></td>
						</form>
					</tr>
					<?php 
						$sql = "select * from admin";
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result))
						{
							print "<form action = 'adminSetting.php' method = 'POST'>";
							print "<input type = 'hidden' value = 'edit' name = 'action'>";
							print "<input type = 'hidden' value = '".$row["adminID"]."' name = 'adminID'>";
							print "<tr>";
								print "<td><input type = 'text' value = '".$row["loginID"]."' name = 'loginID'></td>";
								print "<td><input type = 'password value = '".$row["password"]."' name = 'password'></td>";
								print "<td><input type = 'submit' value = '修改'></td>";
							print "</tr>";							
							print "</form>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php require("interface2.php");?>