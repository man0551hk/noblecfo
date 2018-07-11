<?php require("interface1.php");?>

<div id="content">
	<div class="col_w420" align = "center">
		<img src = "images/logo/main_Logo02.png" alt = "貴族資本集團有限公司 Noble Capital Group Limited" width = "250"/>
	</div>
	
	<div class="col_w420" >
		<div style = "height:10px;"></div>
		<font style = "color:#fff;font-size:1.5em;">貴族資本集團有限公司</font><br/><br/>
		<font style = "color:#fff;font-size:1.1em;">Noble Capital Group Limited</font>
		<br/><br/>
		<?php 
			$sql = "select * from texteditor where textID = '1'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>		<!--Editor 1-->
    </div>	
	<div class="hr_divider"></div>			

	<div class="col_w960">
		<?php 
			$sql = "select * from texteditor where textID = '2'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
			}
		?>		<!--Editor 2-->
	</div>			
	<div class="hr_divider"></div>

	<script>
		$(document).one('ready', function () {	
			$.ionTabs("#costructure"); 
		});
	</script>	

	<div class="col_w960">		
		<div class="ionTabs" id="costructure" data-name="Structure">
			<ul class="ionTabs__head">
				<?php
					$sql = "select * from tabbing where type = 'main' order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<li class=\"ionTabs__tab\" data-target=\"costructure".$counter."\">".$row["name"]."</li>";						
					}
				?>
			</ul>
			<div class="ionTabs__body">
				<?php
					$sql = "select * from tabbing tb, texteditor te where type = 'main' and tb.textEditorID = te.textID order by displayOrder";
					$result = mysql_query($sql);
					$counter = 0;
					while($row = mysql_fetch_array($result))
					{
						$counter++;
						print "<div class=\"ionTabs__item\" data-name=\"costructure".$counter."\">";	
						print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
						print "</div>";
					}
				?>		
				
				<div class="ionTabs__preloader"></div>						
			</div>
		</div>			
    </div>		
	<div class="hr_divider"></div>
	
</div>
<div class="cleaner"></div>        
        
<?php require("interface2.php");?>