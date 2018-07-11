<?php require("interface1.php");?>
<div class="block">			
	<a href="#tablewidget" class="block-heading" data-toggle="collapse">接收電郵</a>
	<div class="block-body">
		<?php
			if(isset($_POST["action"]))
			{
				$mail = $_POST["mail"];
				mysql_query("update email set mail = '$mail'") or die(mysql_error());
			}
		?>	
		<form action = "email.php" method = "POST">
			<input type = 'hidden' value = '1' name = 'action'>
			<?php
				$sql = "select mail from email";
				$result = mysql_query($sql);
				if($row = mysql_fetch_array($result))
				{
					print "<input type = 'text' name = 'mail' value = '".$row["mail"]."'>";					
				}
			?>
			<input type = 'submit' value = '修改'>
		</form>

	</div>
</div>				
<?php require("interface2.php");?>