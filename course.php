<?php require("interface1.php");?>
<div id="content">
	<div class="col_w960">
		<?php
			$sql = "select * from course where display = '1'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print "<font style = 'font-size:1.4em;'><b>".$row["courseName"]."</b></font>";
				print "<br/><br/>";
				print "<font style = 'font-size:1.1em;'><b>課程目的:</font>";
				print "<div style = 'height:7px;'></div>";
				
				print $row["description"];
				$courseID = $row["courseID"];
				$sql2 = "select * from coursetime where courseID = '$courseID' group by classNum order by id";
				$result2 = mysql_query($sql2);
				print "<table width = '100%' cellpadding = '0' cellspacing = '0'>";
				print "<th style = 'border:1px solid white;' colspan = '2'>日期</th>";
				//print "<th style = 'border:1px solid white;'>時間</th>";
				print "<th style = 'border:1px solid white;'>主題</th>";
				while($row2 = mysql_fetch_array($result2))
				{
					print "<tr>";
					print "<td style = 'border:1px solid white; padding-left:5px;' valign = 'middle' align = 'left'>".$row2["classNum"]."</td>";
					//."<br/>".$row2["classDate"]."</td>";
					print "<td style = 'border:1px solid white; padding-left:5px;'>".$row2["classDate"]."<br/>".$row2["classTime"]."</td>";
					print "<td>";
						print "<table width = '100%' cellpadding = '0' cellspacing = '0'>";
						$classNum = $row2["classNum"];
						$sql3 = "select * from coursetime where courseID = '$courseID' and classNum = '$classNum' order by id";
						$result3 = mysql_query($sql3);
						while($row3 = mysql_fetch_array($result3))
						{
							print "<tr>";
								if($row3["classTopic"] == "午飯時間")
								{
									print "<td style = 'border:1px solid white;padding-top:3px;padding-bottom:3px;' align = 'center'>".$row3["classTopic"]."</td>";
								}
								else
								{
									print "<td style = 'border:1px solid white;padding-top:3px;padding-bottom:3px;'>".$row3["classTopic"]."</td>";
								}
							print "</tr>";
						}
						print "</table>";
					print "</td>";
					
					print "</tr>";
				}
				print "</table>";
				
				print "<font style = 'font-size:1.1em;'><b>內容及時間:</font>";
				print "<div style = 'height:7px;'></div>";
				
				print "<font style = 'font-size:1.1em;'><b>*** 課程日	期有機會會彈性調整</font>";
				
				print "<table>";
					print "<tr>";
						print "<td align = 'left' valign = 'top'>";
							print "<font style = 'font-size:1.1em;'>地點:</font>";
						print "</td>";
						print "<td align = 'left' valign = 'top'>";
							print $row["address"];
						print "</td>";						
					print "</tr>";
					print "<tr>";
						print "<td align = 'left' valign = 'top'>";
							print "<font style = 'font-size:1.1em;'>課程費用:</font>";
						print "</td>";
						print "<td align = 'left' valign = 'top'>";
							print $row["fee"];
						print "</td>";						
					print "</tr>";
					print "<tr>";
						print "<td align = 'left' valign = 'top'>";
							print "<font style = 'font-size:1.1em;'>課程要求:</font>";
						print "</td>";
						print "<td align = 'left' valign = 'top'>";
							print $row["requirement"];
						print "</td>";						
					print "</tr>";			
					print "<tr>";
						print "<td align = 'left' valign = 'top'>";
							print "<font style = 'font-size:1.1em;'>上堂必需品:</font>";
						print "</td>";
						print "<td align = 'left' valign = 'top'>";
							print $row["material"];
						print "</td>";						
					print "</tr>";						
				print "</table>";
			}
		?>
	</div>
</div>
<div class="cleaner"></div>
<?php require("interface2.php");?>