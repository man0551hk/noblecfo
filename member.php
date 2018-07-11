<?php session_start(); ?>
<?php require("interface1.php");?>
<?php

	if(isset($_SESSION["memberID"]))
	{
		?>
		<script>window.location="member_page.php";</script>
		<?php	
	}
?>
<div id="content">
	<div class="col_w420 float_l">
		<div id="contact_form">
		<h4>會員登記</h4>
		<?php
			if($_POST["do"] == "contact")
			{
				$name    = @$_POST['re_name'];    // name from the form
				$email   = @$_POST['re_email'];   // email from the form
				$phone     = @$_POST['re_phone'];     // phone from the form
				$password = @$_POST['re_password']; // the message from the form
				$cfmpassword = @$_POST['re_confirmPassword']; // the message from the form
				$re_captcha = @$_POST['re_captcha']; // the user's entry for the captcha code
				$name    = substr($name, 0, 35);			
				if(!isset($_POST["re_name"]) || strlen($name) == 0)
				{
					$name_error = "<font style = 'font-size:0.9em;color:red;'>請輸入姓名</font>";
				}
				
				if(!isset($_POST['re_email']) || strlen($email) == 0)
				{
					$email_error = "<font style = 'font-size:0.9em;color:red;'>請輸入電郵</font>";
				}
				else
				{					
					$sql = "select count(email) as 'numOfMembUsed' from membertable where email = '$email'";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					if($row[numOfMembUsed] >= 1) {
						$email_error = "<font style = 'font-size:0.9em;color:red;'>這個電郵地址已被使用</font>";
					}					
				}
				
				if(!isset($_POST["re_phone"]) || strlen($phone) < 8)
				{
					$phone_error = "<font style = 'font-size:0.9em;color:red;'>請輸入電話</font>";
				}
				
				if(!isset($_POST["re_password"]) )
				{
					$password_error = "<font style = 'font-size:0.9em;color:red;'>請輸入密碼</font>";
				}					
				else if(strlen($password) < 6)
				{
					$password_error = "<font style = 'font-size:0.9em;color:red;'>密碼最少六個數字</font>";
				}
				else if($password != $cfmpassword)
				{
					$password_error = "<font style = 'font-size:0.9em;color:red;'>確認密碼錯誤</font>";
				}
				
				//print $re_captcha." ".$_SESSION["newCode"];
				if(!isset($_POST["re_captcha"]) || strlen($re_captcha) < 0)
				{
					$captcha_error = "<font style = 'font-size:0.9em;color:red;'>請輸入驗證碼</font><br/>";
				}
				else if($re_captcha != $_SESSION["newCode"])
				{
					$captcha_error = "<font style = 'font-size:0.9em;color:red;'>驗證碼錯誤</font><br/>";
				}
				
				if($name_error == "" && $email_error == "" && $phone_error == "" && $password_error == "" && $captcha_error == "")
				{
					$name = addslashes($name);
					$email = addslashes($email);
					$sql = "insert into membertable (name, email, phone, password, time, blocked) values('$name', '$email', '$phone', '$password', NOW(), 0)";
					mysql_query($sql) or die(mysql_error());
					$memberID = mysql_insert_id();
					$_SESSION["memberID"];
					?>
					<script>
						alert("恭喜! 你已成為我們的會員。");
						window.location="member.php";
					</script>
					<?php	
				}
			}
		?>
		<form method="post" name="contact" action="member.php">
			<input type="hidden" name="do" value="contact" />
			<label for="name">*姓名:</label> 			
			<input type="text" id="re_name" name="re_name" size="35" class="required input_field" value="<?php echo htmlspecialchars($name) ?>"/>
			<?php print $name_error; ?>
			<div class="cleaner_h10"></div>
								
			<label for="email">*電郵:</label> 					
			<input type="text" id="re_email" name="re_email" class="validate-email required input_field" value="<?php echo htmlspecialchars($email) ?>"/>
			<div class="cleaner_h10"></div>
			<?php print $email_error; ?>	

			<label for="phone">*電話:</label> 			
			<input type="text" id="re_phone" name="re_phone" class="required input_field" value="<?php echo htmlspecialchars($phone) ?>"/>
			<div class="cleaner_h10"></div>
			<?php print $phone_error; ?>	
			
			<label for="password">*密碼:</label> 			
			<input type="password" id="re_password" name="re_password" class="required input_field" value=""/>
			<div class="cleaner_h10"></div>
			<?php print $password_error; ?>	
			
			<label for="confirmPassword">*確認密碼:</label> 
			<input type="password" id="re_confirmPassword" name="re_confirmPassword" class="required input_field" value=""/>
			<div class="cleaner_h10"></div>		
			
			<label for="email">驗證碼:</label> 
			<?php print $verify_error; ?>	
			<?php
			if(!isset($_SESSION["newCode"])){
				$_SESSION["newCode"] = "";
			}
			?>
	
			<img src="captcha_code_file2.php" alt="CAPTCHA image" align="top" class = "noClass" />
			<br/>
			<input type="text" id="re_captcha" name="re_captcha" class="required input_field" />
			<div class="cleaner_h10"></div>				
			<?php print $captcha_error; ?>	

				
			<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="確定" />
			<input type="reset" class="submit_btn float_r" name="reset" id="reset" value="重設" />
		</form>
		</div>
		
	</div>
	
	<div class="col_w420 float_l">
		<?php
			if($_POST["do"] == "login")
			{
				$log_email = $_POST["log_email"];
				$log_password = $_POST["log_password"];		
				$log_captcha = $_POST["log_captcha"];
				if($log_captcha != $_SESSION["loginCode"])
				{
					$loginError = "<font style = 'font-size:0.9em;color:red;'>驗證碼錯誤</font><br/>";					
				}
				else
				{
					$sql = "select memberID from membertable where email = '$log_email' and password = '$log_password' and blocked = '0'";
					$result = mysql_query($sql);
					if($row = mysql_fetch_array($result))
					{
						$memberID = $row["memberID"];
						$_SESSION["memberID"] = $memberID;
						$loginError ="";
						?>
						<script>window.location="member_page.php";</script>
						<?php
					}
					else
					{
						$loginError = "<font style = 'font-size:0.9em;color:red;'>登入電郵或密碼錯誤</font><br/>";	
					}
				}
			}
		?>
		<div id="contact_form">
		<h4>會員登入</h4>

		<form method="post" name="contact" action="member.php">
			<input type="hidden" name="do" value="login" />						
			<label for="email">電郵:</label>
			<input type="text" id="log_email" name="log_email" class="validate-email required input_field" />
			<div class="cleaner_h10"></div>

			<label for="email">密碼:</label> 
			<input type="password" id="log_password" name="log_password" class="required input_field" />
			<div class="cleaner_h10"></div>
			<?php
			    if(!isset($_SESSION["loginCode"])){
					$_SESSION["loginCode"] = "";
				}		
			?>
			<label for="email">驗證碼:</label> 	
			<img src="captcha_code_file.php" alt="CAPTCHA image" align="top" class = "noClass" />
			<br/>
			<input type="text" id="log_captcha" name="log_captcha" class="required input_field" />
			<div class="cleaner_h10"></div>
			<?php
				print $loginError;				
			?>
			
			<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="登入" />

		</form>			
		</div>	
	</div>	
	<div class="cleaner"></div>   	
</div>
<div class="cleaner"></div>   


<?php require("interface2.php");?>