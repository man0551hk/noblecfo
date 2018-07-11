<?php require("interface1.php");?>


<div id="content">
	<div class="col_w420" align = "center">
		<img src = "images/logo/cfo_logo.png" alt = "大中華家族辦公室有限公司 The Greater China Family Office Limited" height = "94"/>
	</div>
	
	<div class="col_w420">
		<font style = "color:#fff;font-size:1.5em;">大中華家族辦公室有限公司</font><br/><br/>
		<font style = "color:#fff;font-size:1.1em;">The Greater China Family Office Limited</font>	
		<br/><br/>
		<?php 
			$sql = "select * from texteditor where textID = '19'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>			<!--Editor 19-->						
    </div>	
	<div class="hr_divider"></div>

	<div class="col_w960">
		<?php 
			$sql = "select * from texteditor where textID = '20'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>			<!--Editor 20-->	
	</div>
	<div class="hr_divider"></div>
	
	<script>
		$(document).one('ready', function () {	
			$.ionTabs("#pic, #event"); 
			//$.ionTabs("#pic"); 
		});
	</script>		
	
	<div class="col_w960">
		<div class="ionTabs" id="pic" data-name="Product">
			<ul class="ionTabs__head">
				<?php
					$sql = "select * from tabbing where type = 'family' order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<li class=\"ionTabs__tab\" data-target=\"family".$counter."\">".$row["name"]."</li>";						
					}
				?>
			</ul>
			<div class="ionTabs__body">
				<?php
					$sql = "select * from tabbing tb, texteditor te where type = 'family' and tb.textEditorID = te.textID order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<div class=\"ionTabs__item\" data-name=\"family".$counter."\">";	
						print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
						print "</div>";
					}
				?>	
				<div class="ionTabs__preloader"></div>						
				</div>
		</div>			
    </div>		
	<div class="hr_divider"></div>
	
	
	
	<div class="cleaner"></div> 
</div>
<div class="cleaner"></div> 
<?php require("interface2.php");?>