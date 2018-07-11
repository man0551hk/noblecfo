<?php require("interface1.php");?>

<div class="block">
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">會員資料</a>
	<div class="block-body">
		<table class = "table">
		<tbody>
			<tr>
				<!--<td>編號</td>-->
				<td>姓名</td>				
				<td>電郵</td>
				<td>電話</td>	
				<td>密碼</td>			
				<td>加入日期時間</td>
				<td>封鎖</td>
			</tr>
		<?php
		if(isset($_GET["page"]))
		{
			$from = $_GET["page"];
		}

		if(empty($from)) {
			$from = 0;
		}	
		
			$sql = "select * from membertable order by memberID asc limit $from, 50";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				print "<tr>";
				print "<form action = 'editMember.php' method = 'POST'>";
				print "<input type = 'hidden' value = 'memberupdate' name = 'do'>";
				print "<input type = 'hidden' value = '$row[memberID]' name = 'memberID'>";
				/*print "<td>";
				print "$row[memberID]";
				print "</td>";	*/
				print "<td>";
				print "<input type = 'text' name = 'name' value = '".$row["name"]."'>";				
				print "</td>";	
				print "<td>";				
				print "$row[email]";		//"<input type = 'text' name = 'email' value = '".$row["email"]."'>";
				print "</td>";	
				print "<td>";
				print "<input type = 'text' name = 'phone' value = '".$row["phone"]."'>";				
				print "</td>";
				print "<td>";
				print "<input type = 'text' name = 'password' value = '".$row["password"]."'>";				
				print "</td>";		
				print "<td>";
				print "$row[time]";		//"<input type = 'text' name = 'time' value = '".$row["time"]."'>";				
				print "</td>";	
				print "<td>";
				print "<input type = 'checkbox' name = 'blocked' ";
				if($row["blocked"] == "1")
				{
					print "checked";
				}
				print ">";
				print "</td>";
				print "<td>";
				print "<input type = 'submit' name = 'submit' value = '修改'>";
				print "</td>";
				print "</form>";
				print "</tr>";
			}
		?>
		
		</tbody>
		</table>
		<p><center><?php echo "Pages "; page_menu(); ?></center></p>
	</div>

	<?php 
		if(isset($_POST["do"]))
		{
			$memberID = $_POST["memberID"];
			$name = $_POST["name"];
			//$email = $_POST["email"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			$block = 0;
			if(isset($_POST["blocked"]))
			{
				$block = 1;
			}
			$sql = "update membertable SET name = '$name', phone = '$phone', password = '$password', blocked = '$block'  where memberID = '$memberID' LIMIT 1";
			$result = mysql_query($sql);
			?>
			<script>
				window.location = "editMember.php";
			</script>
			<?php	
		}
		
		function page_menu()
		{
			$sql = "select count(*) as numrows from membertable";
			$result = mysql_query($sql);
			$totalrows = mysql_fetch_array($result);
			$numpage = $totalrows[numrows]/50;
			for($i=1; $i<=$numpage; $i++) {
				echo "<a href='editMember.php?page=$record'>$i</a>";
				echo " ";
				$record+=5;
			}
			if($totalrows[numrows]%5 != 0) {
				echo "<a href='editMember.php?page=$record'>$i</a>";
			}
		}
		
	?>
	
<?php require("interface2.php");?>