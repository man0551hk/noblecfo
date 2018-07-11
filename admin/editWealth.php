<?php require("interface1.php");?>

<script src="ckeditor/ckeditor.js"></script>

<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">分頁</a>
	<div class="block-body">
	<form action = 'addTab.php' method = 'POST'>
		<input type = 'hidden' name = 'redirect' value = 'editWealth.php'/>
		<input type = 'hidden' name = 'type' value = 'wealth'/>
		分頁名稱<input type = 'text' name = 'name'>
		<input type = 'submit' value = '增加'/>
	</form>
	<table class = "table">
	<th>分頁名稱</th>
	<th>排序</th>
	<th>Text Editor ID</th>
	<th></th>
	<?php
		$sql = "select * from tabbing where type = 'wealth' order by displayOrder";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result))
		{
			print "<tr>";
			print "<form action = 'editTabbing.php' method = 'POST'>";
			print "<input type = 'hidden' value = '".$row["id"]."' name = 'id'>";
			print "<input type = 'hidden' value = '".$row["type"]."' name = 'type'>";
			print "<input type = 'hidden' name = 'redirect' value = 'editWealth.php'/>";
			print "<td><input type = 'text' name = 'name' value = '".$row["name"]."'></td>";
			print "<td>";
			print "<select name = 'displayOrder'>";
				$sql2 = "select max(displayOrder) as do from tabbing where type = 'main' order by displayOrder";
				$result2 = mysql_query($sql2);
				$maxOrder = 0;
				if($row2 = mysql_fetch_array($result2))
				{
					$maxOrder = $row2["do"];
				}
				for($i = 1; $i <= $maxOrder; $i++)
				{
					if($i == $row["displayOrder"])
					{
						print "<option value = '".$i."' selected>".$i."</option>";
					}
					else
					{
						print "<option value = '".$i."'>".$i."</option>";
					}
				}
			print "</select>";
			print "</td><td>";
			print "<input type = 'text' value = '".$row["textEditorID"]."' name = 'textEditorID'>";
			print "<td>";
			print "<input type = 'submit' value = '修改'/>";
			print "<a href = 'deleteTab.php?id=".$row["id"]."&textEditorID=".$row["textEditorID"]."&redirect=editWealth'>刪除</a>";
			print "</td>";
			print "</form>";
			print "</tr>";
		}
	?>
	</table>
	</div>
</div>

<?php
	process_textbox_form();
	$sql = "select textID, textindex, textarea from textEditor where textindex like 'btext%' order by textID ASC";
	$result = mysql_query($sql);
	$numOfText = mysql_num_rows($result);

	for($i=0; $i<$numOfText; $i++) {
		$row = mysql_fetch_array($result);
?>
		<h3><?php echo "Text Editor: ".$row[textID] ?></h3>
		<form action = 'insertImage.php' enctype="multipart/form-data" method = 'POST'>
			<input type = 'hidden' name = 'redirect' value = 'editWealth'>
			<?php $textID = $row[textID]; ?>
			<input type = 'hidden' name = 'textID' value = '<?php print $textID;?>'>
			圖片<input type = 'file' name = 'image' />
			<input type = 'submit' value = '上傳' />
		</form>	
		<br/>
		<table width = '100%'>
		<?php
			
			$sql2 = "select * from imageLink where textID = '$textID'";
			$result2 = mysql_query($sql2);
			while($row2 = mysql_fetch_array($result2))
			{
				print "<tr>";
				print "<td>";
				print "<a href = '".$row2["path"]."' target = '_blank'>".$row2["name"]."</a><br/>";				
				print "</td>";
				print "<td>";				
				print "連結:&nbsp;".$row2["path"];
				print "</td>";
				print "<td>";
				print "<a href = 'deleteImage.php?id=".$row2["id"]."&redirect=editWealth'>刪除</a>";
				print "</td>";
				print "</tr>";
			}
		?>
		</table>
		<br/>		
		<form method="post" name="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="hidden" name="do" value="<?php echo $row[textindex]; ?>" />	
		<textarea name="<?php echo $row[textindex]; ?>" id="<?php echo $row[textindex]; ?>" rows="10" cols="80">
			<?php
				print "$row[textarea]";
			?>
		</textarea>
		<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="儲存" />
		</form>

		<script>
			CKEDITOR.replace( '<?php echo $row[textindex]; ?>', { 
							enterMode: CKEDITOR.ENTER_BR, 
							on: {'instanceReady': function (evt) {    }},
						});     	
		</script>

<?php
	}
?>


<?php

function process_textbox_form()
{
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 		$textindex    = @$_POST['do'];
		$textarea    = @$_POST[$textindex];
		$sql = "update texteditor SET textarea = '$textarea' where textindex = '$textindex' limit 1";
		$result = mysql_query($sql);
		if(!$result){
			echo mysql_errno($link).": ".mysql_error($link);
		} else { ?>
			<h2 style = "color:#0000FF;"><?php 
				$sql = "select textID from textEditor where textindex = '$textindex'";
				$result = mysql_query($sql);
				$row = mysql_fetch_array($result);
				echo "Text Editor ".$row[textID]." is saved to the database successfully!";
				?>
			</h2><?php
		}
	}
}
?>

<?php require("interface2.php");?>