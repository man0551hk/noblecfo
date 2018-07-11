<?php require("interface1.php");?>

<script>
	$(document).one('ready', function () {	
		 $.ionTabs("#aboutSch, #organize, #school, #book"); 
	});
</script>
<div id="content">
	<div class="col_w420" align = "center">
		<img src = "images/logo/School03.png" alt = "貴族商學院有限公司 Nobility School Limited" height = "150"/>
	</div>
	<div class="col_w420" valign = "middle">
		<div style = "height:22px;"></div>
		<font style = "color:#fff;font-size:1.5em;">貴族商學院有限公司</font><br/><br/>
		<font style = "color:#fff;font-size:1.4em;">Nobility School Limited</font>	
		<br/><br/>
		<?php 
			$sql = "select * from texteditor where textID = '23'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>			<!--Editor 23-->		
    </div>		
	<div class="hr_divider"></div>
	
	<div class="col_w960">
		<?php 
			$sql = "select * from texteditor where textID = '24'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>			<!--Editor 24-->			
	</div>
	<div class="hr_divider"></div>
	
	<div class="col_w960">
		<div class="ionTabs" id="aboutSch" data-name="AboutSch">
			<ul class="ionTabs__head">
				<?php
					$sql = "select * from tabbing where type = 'school' order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<li class=\"ionTabs__tab\" data-target=\"school".$counter."\">".$row["name"]."</li>";						
					}
				?>
			</ul>
			<div class="ionTabs__body">
				<?php
					$sql = "select * from tabbing tb, texteditor te where type = 'school' and tb.textEditorID = te.textID order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<div class=\"ionTabs__item\" data-name=\"school".$counter."\">";	
						print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
						print "</div>";
					}
				?>				
				<div class="ionTabs__preloader"></div>						
			</div>
		</div>	
	</div>

	
	<div class="cleaner"></div> 
</div>
<div class="cleaner"></div> 
<?php require("interface2.php");?>