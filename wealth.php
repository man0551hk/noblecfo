<?php require("interface1.php");?>


<div id="content">
	<div class="col_w420" align = "center">
		<img src = "images/logo/wealth_logo_outline.png" alt = "恆創財富顧問有限公司 Eternity Wealth Advisory Limited" width = "250"/>
	</div>
    <div class="col_w420">
		<font style = "color:#fff;font-size:1.5em;">恆創財富顧問有限公司</font><br/><br/>
		<font style = "color:#fff;font-size:1.3em;">Eternity Wealth Advisory Limited</font>				
		<br/><br/>
		<?php 
			$sql = "select * from texteditor where textID = '13'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>		<!--Editor 13-->
	</div>
    <div class="hr_divider"></div>		

	<div class="col_w960">				
		<?php 
			$sql = "select * from texteditor where textID = '14'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?><!--Editor 14-->
	</div>
	<div class="hr_divider"></div>		
                
	<script>
		$(document).one('ready', function () {	
			 $.ionTabs("#wealth"); 
		});
	</script>	
	<div class="col_w960">				
		<div class="ionTabs" id="wealth" data-name="Wealth">
			<ul class="ionTabs__head">
				<?php
					$sql = "select * from tabbing where type = 'wealth' order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<li class=\"ionTabs__tab\" data-target=\"wealth".$counter."\">".$row["name"]."</li>";						
					}
				?>
			</ul>
			<div class="ionTabs__body">
				<?php
					$sql = "select * from tabbing tb, texteditor te where type = 'wealth' and tb.textEditorID = te.textID order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<div class=\"ionTabs__item\" data-name=\"wealth".$counter."\">";	
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