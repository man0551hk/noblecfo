<?php require("interface1.php");?>
<?php require_once("PHPMailer/class.phpmailer.php");?>
<script language = "javascript" type = "text/javascript">
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>	
	<div id="content">
		<div class="col_w960">
			<center>
				<img src = "images/eventImage.jpg" width = "820"/>
			</center>
		</div>
		<div class="hr_divider"></div>
		
		<?php			
			$eventError = "";
			$nameError = "";
			$phoneError = "";
			$emailError = "";
			$jobError = "";
			$addressError = "";
			$eventID1 = "";
			$eventID2 = "";
			$name = $_POST["name"];
			$ageGroup = $_POST["ageGroup"];
			$gender = $_POST["gender"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$job = $_POST["job"];
			$address = $_POST["address"];
			$ticketNo1 = $_POST["ticketNo1"];
			$ticketNo2 = $_POST["ticketNo2"];	
			$date1 = $_POST["date1"];
			$date2 = $_POST["date2"];
			$time1 = "";
			$time2 = "";
			
			if(isset($_POST["action"]))
			{
				$sql = "select * from eventTable where display = 1 order by eventID";
				$result = mysql_query($sql);
				$firstBool = true;
				$secondBool = true;
				$counter = 0;
				while($row = mysql_fetch_array($result))
				{
					if($counter == 0)
					{ 
						$eventID1 = $row["eventID"];
					}
					else if($counter == 1)
					{
						$eventID2 = $row["eventID"];
					}
					
					if(!isset($_POST["eventID".$row["eventID"]]))
					{
						if($counter == 0)
						{
							$firstBool = false;
						}
						if($counter == 1)
						{
							$secondBool = false;
						}						
					}

					$counter++;
				}	
				if($firstBool == false && $secondBool == false)
				{
					$eventError = "<font style = 'color:#666633;font-size:1.3em;'>請選擇出席講座</font>";				
				}
				if(!isset($_POST["name"]) || $_POST["name"] == "")
				{
					$nameError = "<font style = 'color:#666633;font-size:1.1em;'>請輸入姓名</font>";
				}
				if(!isset($_POST["phone"]) || $_POST["phone"] == "")
				{
					$phoneError = "<font style = 'color:#666633;font-size:1.1em;'>請輸入電話</font>";
				}
				if(!isset($_POST["email"]) || $_POST["email"] == "")
				{
					$emailError = "<font style = 'color:#666633;font-size:1.1em;'>請輸入電郵</font>";
				}		
				if(!isset($_POST["job"]) || $_POST["job"] == "")
				{
					$jobError = "<font style = 'color:#666633;font-size:1.1em;'>請輸入職業</font>";
				}	
				if(!isset($_POST["address"]) || $_POST["address"] == "")
				{
					$addressError = "<font style = 'color:#666633;font-size:1.1em;'>請輸入地址</font>";
				}
				
				if(($firstBool == true || $secondBool == true) && $nameError == "" && $phoneError == "" && $emailError == "" && $jobError == "" && $addressError == "")
				{
					if(!isset($_POST["eventID".$eventID1]))
					{
						$eventID1 = 0;
						$ticketNo1 = 0;
					}
					
					if(!isset($_POST["eventID".$eventID2]))
					{
						$eventID2 = 0;
						$ticketNo2 = 0;
					}	
					
					if($date1 != "")
					{
						$date1s = explode("@", $date1);
						$date1 = $date1s[0];
						$time1 = $date1s[1];
					}
					
					if($date2 != "")
					{
						$date2s = explode("@", $date2);
						$date2 = $date2s[0];
						$time2 = $date2s[1];					
					}
					
					$sql = "insert into event_joiner (eventID1, ticketNo1, date1, time1, eventID2, ticketNo2, date2, time2, name, gender, phone, ageGroup, email, job, address) 
										values ('$eventID1', '$ticketNo1', '$date1', '$time1', '$eventID2', '$ticketNo2', '$date2', '$time2', '$name', '$gender', '$phone', '$ageGroup', '$email', '$job', '$address')";
					mysql_query($sql) or die (mysql_error());
					
			
					
					$subject = 'Noble - New Event Participant';
					$message .= "姓名:".$name."<br/>";
					$message .= "稱謂:".$gender."<br/>";
					$message .= "電話:".$phone."<br/>";
					$message .= "年齡:".$ageGroup."<br/>";
					$message .= "電郵:".$email."<br/>";
					$message .= "職業:".$job."<br/>";
					$message .= "地址:".$address."<br/>";
					if($ticketNo1 != 0)
					{
						$sql = "select * from eventtable where eventID = '$eventID1'";
						$result = mysql_query($sql);
						if($row = mysql_fetch_array($result))
						{
							$message .= $row["name"]." ".$date1." ".$time1." 門票數量:".$ticketNo1."<br/>";							
						}
					}
					
					if($ticketNo2 != 0)
					{
						$sql = "select name from eventtable where eventID = '$eventID2'";
						$result = mysql_query($sql);
						if($row = mysql_fetch_array($result))
						{
							$message .= $row["name"]." ".$date2." ".$time2." 門票數量:".$ticketNo2."<br/>";							
						}						
					}
				
					$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->IsHTML(true);
					$mail->SMTPDebug = 0;
					$mail->SMTPAuth = 'login';
					$mail->SMTPSecure = 'ssl';
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 465;
					$mail->Username = 'sysadmin@brotherhood-tech.com';
					$mail->Password = '60159930';
					$mail->SetFrom('sysadmin@brotherhood-tech.com', 'Noble System');
					$mail->Subject = $subject;
					$mail->Body = $message;
					$mail->AddAddress('admin@ewahk.com');

					if(!$mail->Send())
					{
						echo $mail->ErrorInfo;
					}
					else
					{
						//echo "Sent";
					}						
					
						
					?>
					<script>
						alert("感謝你的參與，我們將有專人通知閣下。");
						window.location = "event.php";						
					</script>
					<?php
				}				
			}
		?>
		
		<h3>請選擇出席講座：</h3>
		<form action = "event.php" id = "eventForm" method = "POST">
			<input type = 'hidden' value = '1' name = 'action' id = "action">
			<table width = "100%" style = "font-size:1.3em">
				<tr>
					<?php
						$sql = "select * from eventtable where display = '1'";
						$result = mysql_query($sql);
						$count = 0;
						while($row = mysql_fetch_array($result))
						{
							if($count == 0)
							{
								?>
								<td align = "left" style = "padding-left:15px;">
								<?php
							}
							else if($count == 1)
							{
								?>
								<td align = "left" style = "border-left:1px solid white;padding-left:15px;">
								<?php
							}
							?>
								<input type = "checkbox" name = "eventID<?php print $row["eventID"]?>"
								<?php
									
									if(isset($_POST["event".$row["eventID"]]))
									{
										print "checked";
									}
								?>
								>
								<?php print $row["name"]?>
								<br/>
								選擇日期:
								<select name = "<?php if($count == 0){ print "date1";} else { print "date2";}?>" style = "width:300px;">
									<option value = "<?php print $row["date"]."@".$row["time"];?> "><?php print $row["date"]."&nbsp;".$row["time"];?></option>
									<?php
										if($row["date2"] != "" && $row["time2"] != "")
										{
											?>
												<option value = "<?php print $row["date2"]."@".$row["time2"];?> "><?php print $row["date2"]."&nbsp;".$row["time2"];?></option>
											<?php
										}
									?>
								</select>
								<br/>
								門票數量: 
								<select name = "<?php if($count == 0){ print "ticketNo1";} else { print "ticketNo2";}?>" id = "">
									<?php										
										for($i = 1; $i <= 10; $i++)
										{
											print "<option value = '".$i."'";
											if($count == 0)
											{
												if($ticketNo1 == $i)
												{ print "selected";}
											}
											else
											{
												if($ticketNo2 == $i)
												{ print "selected";}
											}
											print ">".$i."</option>";
										}
									?>
								</select>
								<br/>
								講者: <?php print $row["author"];?>
								<br/>
								地址: <?php print $row["address"];?>
								</td>							
							<?php
							$count++;
						}
					?>
				</tr>				
			</table>
			<?php
				if($eventError != "")
				{
					print $eventError;					
				}
			?>
			<br/>
			
			<div style = "font-size:1.3em">
				<label for="author">*姓名:</label> 
				<input type="text" id="name" name="name" value = "<?php print $name;?>" class="required input_field" />
				<select name = "gender">
					<option value = "Mr" <?php if($gender == "Mr"){print "selected";}?>>先生</option>
					<option value = "Mrs" <?php if($gender == "Mrs"){print "selected";}?>>女士</option>
				</select>

				<?php
					if($nameError != "")
					{
						print $nameError;
					}
				?>
				<div class="cleaner_h10"></div>
									
				<label for="phone">*聯絡電話:</label> 
				<input type="text" id="phone" name="phone" value = "<?php print $phone;?>" class="required input_field" onkeypress="return isNumberKey(event)" />
				
				<?php
					if($phoneError != "")
					{
						print "<font style = \"color:Red;\">".$phoneError."</font>";
					}
				?>
				
				<div class="cleaner_h10"></div>
				
				<label for="ageGroup">*年齡:</label> 
				<select name = "ageGroup">
					<option value = "25-40" <?php if($ageGroup == "25-40"){print "selected";}?>>25-40</option>
					<option value = "41-50" <?php if($ageGroup == "41-50"){print "selected";}?>>41-50</option>
					<option value = "51-60" <?php if($ageGroup == "51-60"){print "selected";}?>>51-60</option>
					<option value = "60up" <?php if($ageGroup == "60up"){print "selected";}?>>60up</option>
				</select>
				<div class="cleaner_h10"></div>			
												
				<label for="email">*電郵:</label> 
				<input type="text" id="email" name="email" value = "<?php print $email;?>" class="validate-email required input_field" size = "80"/>				
				<?php
					if($emailError != "")
					{
						print $emailError;
					}
				?>				
				<div class="cleaner_h10"></div>

				<label for="email">*職業:</label> 
				<input type="text" id="job" name="job" value = "<?php print $email;?>" class="required input_field" size = "80"/>
				<?php
					if($jobError != "")
					{
						print $jobError;
					}
				?>					
				<div class="cleaner_h10"></div>
				
				<label for="address">*聯絡地址:</label> 
				<input type="text" id="address" name="address" value = "<?php print $address;?>" class="required input_field" size = "80"/>(門票郵寄)
				<?php
					if($jobError != "")
					{
						print $addressError;
					}
				?>					
				<div class="cleaner_h10"></div>	
				
				<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="確定" />
				<br/><br/>
			</div>
		</form>
		<?php
			$sql = "select textarea from texteditor where textID = '28'";
			$result = mysql_query($sql);
			if($row = mysql_fetch_array($result))
			{
				print $row["textarea"];
			}
		?>
<!--報名及查詢，請填妥以上表格傳真至2722 4268，辦工時間內致電5313 9181或2722 4338或<br/>
電郵至<a href = "mailto:admin@ewahk.com" style = "color:#fff">admin@ewahk.com</a>﹙先報先得，名額：每場50人﹚<br/>
主辦機構：大中華家族辦公室有限公司　　　　　　　　　　協辦機構：恆創財富顧問有限公司		-->
	</div>	
    <div class="cleaner"></div>        
<?php require("interface2.php");?>