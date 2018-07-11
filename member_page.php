<?php session_start();
require("interface1.php");
if(!isset($_SESSION["memberID"]))
{
	?>
	<meta http-equiv="refresh" content="0; url=member.php">
	<?php
}
?>
<div id="content">
	<script>
		$(document).one('ready', function () {	
			 $.ionTabs("#wealth"); 
		});
	</script>
	<div class="col_w960">	
		<div class="ionTabs" id="wealth" data-name="Wealth">
			<ul class="ionTabs__head">
				<li class="ionTabs__tab" data-target="wealth1">檔案下載</li>
				<li class="ionTabs__tab" data-target="wealth2">登出</li>
			</ul>
			<div class="ionTabs__body">
				<div class="ionTabs__item" data-name="wealth1">	
					<table>
						<?php
							$sql = "select * from file where display = '1' order by id desc";
							$result = mysql_query($sql);
							while($row = mysql_fetch_array($result))
							{
								print "<tr>";
									print "<td>";
										print "<a href = '".$row["path"]."' target = '_blank'>".$row["name"]."</a>";
									print "</td>";
								print "<tr>";
							}
						?>
					</table>
				</div>			
				<div class="ionTabs__item" data-name="wealth2">	
					<form action = 'user_logout.php' method = 'POST'>
						<input type = 'submit' value = '確定登出'>
					</form>
				</div>
			</div>
			<div class="ionTabs__preloader"></div>		
		</div>
	</div>
</div>
<?php require("interface2.php");?>