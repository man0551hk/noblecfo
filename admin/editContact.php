<?php require("interface1.php");?>

<script src="ckeditor/ckeditor.js"></script>

<?php
	process_textbox_form();
	$sql = "select textID, textindex, textarea from textEditor where textindex like 'etext%' order by textID ASC";
	$result = mysql_query($sql);
	$numOfText = mysql_num_rows($result);

	for($i=0; $i<$numOfText; $i++) {
		$row = mysql_fetch_array($result);
?>
		<h3><?php echo "Text Editor: ".$row[textID] ?></h3>
		<form action = 'insertImage.php' enctype="multipart/form-data" method = 'POST'>
			<input type = 'hidden' name = 'redirect' value = 'editContact'>
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
				print "<a href = 'deleteImage.php?id=".$row2["id"]."&redirect=editContact'>刪除</a>";
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