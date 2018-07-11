<?php require("interface1.php");?>

		<div class="block">			
			<a href="#tablewidget" class="block-heading" data-toggle="collapse">講座參加者</a>
			<div class="block-body">
				選擇講座
				<form action = "event_joiner.php" method = "POST">
					<select name = "eventID" >
						<option value = ""></option>
						<?php
							$sql = "select * from eventtable order by date desc";
							$result = mysql_query($sql);
							while($row = mysql_fetch_array($result))
							{
								print "<option value = '".$row["eventID"]."'>".$row["name"]." ".$row["date"]." ".$row["time"]."</option>";
							}
						?>
					</select>
					<input type = "submit" value = "Search" name = "searchBtn">
				</form>
				<table class="table">
					<thead>
						<tr>
							<th>姓名</th>
							<th>講座</th>
							<th>門票數量</th>
							<th>講座</th>
							<th>門票數量</th>
							<th>聯絡電話</th>
							<th>年齡</th>
							<th>電郵</th>
							<th>職業</th>
							<th>聯絡地址</th>
						</tr>
					</thead>
					<tbody>				
					<?php
					if(isset($_POST["searchBtn"]))
					{
						$eventID = $_POST["eventID"];						
						$sql = "select * from event_joiner where (eventID1 = '$eventID' or eventID2 = '$eventID') order by id desc";
						$result = mysql_query($sql) or die (mysql_error());
						while($row = mysql_fetch_array($result))
						{
							$eventID1 = $row["eventID1"];
							$eventID2 = $row["eventID2"];
							print "<tr>";
								print "<td>".$row["name"];
								if($row["gender"] == "Mr")
								{
									print "先生";
								}
								else
								{
									print "女士";
								}
								print "</td>";
								print "<td>";
									$sql2 = "select * from eventtable where eventID = '$eventID1'";
									$result2 = mysql_query($sql2);
									if($row2 = mysql_fetch_array($result2))
									{
										print $row2["name"]."<br/>".$row["date1"]."<br/>".$row["time1"];
									}
								print "</td>";
								print "<td>";
								if($row["ticketNo1"] != 0)
								{
									print $row["ticketNo1"];
								}
								print "</td>";
								print "<td>";
									$sql2 = "select * from eventtable where eventID = '$eventID2'";
									$result2 = mysql_query($sql2);
									if($row2 = mysql_fetch_array($result2))
									{
										print $row2["name"]."<br/>".$row["date2"]."<br/>".$row["time2"];
									}
								print "</td>";
								print "<td>";
								if($row["ticketNo2"] != 0)
								{
									print $row["ticketNo2"];
								}
								print "</td>";								
								print "<td>".$row["phone"]."</td>";
								print "<td>".$row["ageGroup"]."</td>";
								print "<td>".$row["email"]."</td>";
								print "<td>".$row["job"]."</td>";
								print "<td>".$row["address"]."</td>";
							print "</tr>";
						}
					}
					
					?>
					</tbody>
				</table>
			</div>
		</div>
<?php require("interface2.php");?>