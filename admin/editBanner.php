<?php require("interface1.php");?>
<script src="ckeditor/ckeditor.js"></script>
<script>
CKEDITOR.addCss(".cke_editable{background-color: #26163d}");
</script>
<?php
if(isset($_POST["action"]))
{
	$id = $_POST["id"];
	if($id == "banner1")
	{
		$content = $_POST["banner1Content"];
		$sql = "update texteditor set textarea = '$content' where textindex = '$id'";
		mysql_query($sql) or die (mysql_error());		
	}
	else if($id == "banner2")
	{
		$content = $_POST["banner2Content"];
		$sql = "update texteditor set textarea = '$content' where textindex = '$id'";
		mysql_query($sql);			
	}
	else if($id == "banner3")
	{
		$content = $_POST["banner3Content"];
		$sql = "update texteditor set textarea = '$content' where textindex = '$id'";
		mysql_query($sql);			
	}
	else if($id == "banner4")
	{
		$content = $_POST["banner4Content"];
		$sql = "update texteditor set textarea = '$content' where textindex = '$id'";
		mysql_query($sql);			
	}
}
?>

<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">貴族資本集團限公司</a>
	<div class="block-body">
		<form action = 'editBanner.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = '1'>
			<input type = 'hidden' name = 'id' value = 'banner1'>
			<textarea name = 'banner1Content' id = 'banner1Content'>
				<?php
					$sql = "select * from texteditor where textindex = 'banner1'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["textarea"];
					}
				?>
			</textarea>
			<input type = 'submit' value = '修改'>
		</form>
	</div>
</div>
<script>
	CKEDITOR.replace( 'banner1Content', { 
		enterMode: CKEDITOR.ENTER_BR, 
		on: {'instanceReady': function (evt) {    }},
	});     	
</script>

<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">恒創財富顧問</a>
	<div class="block-body">
		<form action = 'editBanner.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = '1'>
			<input type = 'hidden' name = 'id' value = 'banner2'>
			<textarea name = 'banner2Content' id = 'banner2Content'>
				<?php
					$sql = "select * from texteditor where textindex = 'banner2'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["textarea"];
					}
				?>
			</textarea>
			<input type = 'submit' value = '修改'>
		</form>	
	</div>
</div>
<script>
	CKEDITOR.replace( 'banner2Content', { 
		enterMode: CKEDITOR.ENTER_BR, 
		on: {'instanceReady': function (evt) {    }},
	});     	
</script>

<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">大中華家族辦公室</a>
	<div class="block-body">
		<form action = 'editBanner.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = '1'>
			<input type = 'hidden' name = 'id' value = 'banner3'>
			<textarea name = 'banner3Content' id = 'banner3Content'>
				<?php
					$sql = "select * from texteditor where textindex = 'banner3'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["textarea"];
					}
				?>
			</textarea>
			<input type = 'submit' value = '修改'>
		</form>		
	</div>
</div>
<script>
	CKEDITOR.replace( 'banner3Content', { 
		enterMode: CKEDITOR.ENTER_BR, 
		on: {'instanceReady': function (evt) {    }},
	});     	
</script>

<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">貴族商學院</a>
	<div class="block-body">
		<form action = 'editBanner.php' method = 'POST'>
			<input type = 'hidden' name = 'action' value = '1'>
			<input type = 'hidden' name = 'id' value = 'banner4'>
			<textarea name = 'banner4Content' id = 'banner4Content'>
				<?php
					$sql = "select * from texteditor where textindex = 'banner4'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						print $row["textarea"];
					}
				?>
			</textarea>
			<input type = 'submit' value = '修改'>
		</form>		
	</div>
</div>
<script>
	CKEDITOR.replace( 'banner4Content', { 
		enterMode: CKEDITOR.ENTER_BR, 
		on: {'instanceReady': function (evt) {    }},
	});     	
</script>




<?php require("interface2.php");?>