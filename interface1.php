<?php header("Location: blank.html");?>
<?php session_start();?>
<?php require("include.php");?>
<?php include("convert.php");?>
<?php
function language($str){  
	return zhconversion_cn($str);//转换为台湾正体  
}  
$currLang = "ZH";
if(isset($_COOKIE["lang"]))
{
	$currLang = $_COOKIE["lang"];
}
if(isset($_GET["lang"]))
{
	$currLang = $_GET["lang"];
}
$expire=time()+60*60*24*30;
setcookie("lang", $currLang , $expire);

if($currLang == "CN")
{
	ob_start('language');  
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>貴族資本集團有限公司</title>
		<meta name="keywords" content="貴族資本集團有限公司,恆創財富顧問有限公司,大中華家族辦公室有限公司,貴族商學院有限公司" />
		<meta name="description" content="貴族資本集團有限公司,恆創財富顧問有限公司,大中華家族辦公室有限公司,貴族商學院有限公司" />
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
		<!-- jQuery library (served from Google) -->
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/ion.tabs.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="js/jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="css/jquery.bxslider.css" rel="stylesheet" />
		<link href="css/ion.tabs.css" rel="stylesheet" />
		<script src="js/ion.tabs.js"></script>		
		<link href="css/ion.tabs.skinBordered.css" rel="stylesheet" />		
		<script>
			$(document).ready(function(){
			  slider = $('.bxslider').bxSlider({
				mode:'fade',
				infiniteLoop: true,
				pager: false,
				controls:true,
				responsive:false,
				slideWidth:940,
				adaptiveHeight:true
			  });
			  
			  slider.startAuto();
			});		
		</script>
	</head>
<body>
<div id="templatemo_wrapper_outer">
	<div id="templatemo_wrapper">
    
    	<div id="templatemo_header">
			<div id="site_title">
					<table cellpadding = '0' cellspacing = '0' width = '100%'>
						<tr>
							<td align = 'left'>
								<a href="index.php" rel="nofollow">
									<img src = "images/logo.png"/>
								</a>
							</td>	
							<td align = "right" valign = "top">
								<a href = "?lang=ZH" style = "font-size:1em;">繁</a> | <a href = "?lang=CN" style = "font-size:1em;">簡</a>
							</td>
						</tr>
					</table>
			</div> 			
			<div class="cleaner"></div>
		</div>
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php" style = "width:76px">主頁</a></li>
                <li><a href="wealth.php" style = "width:140px">恆創財富顧問</a></li>
                <li><a href="family.php" style = "width:156px">大中華家族辦公室</a></li>
                <li><a href="school.php" style = "width:130px">貴族商學院</a></li>
                <li><a href="event.php" style = "width:90px">講座</a></li>
				<li><a href="course.php" style = "width:90px">課程</a></li>
				<li><a href="member.php" style = "width:100px">會員天地</a></li>
				<li><a href="contact.php" style = "width:90px">聯絡我們</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
        <div id="templatemo_slider_wrapper">
        
        	<div id="templatemo_slider">
            
				<ul class="bxslider">
				    <li align = "center">
						<table style = "margin-left:50px;height:256px;width:650px;">
							<tr>
								<td valign = "top" align = "left" style = "padding-top:20px;width:250px;padding-left:90px;">
								 <img src="images/logo/main_Logo02.png" alt="貴族資本集團有限公司" width = "225"/>
								</td>
								<td valign = "top" align = "left" width = "350px" style = "padding-top:20px;">
                                        <h2 style = "color:#26163d;">貴族資本集團有限公司</h2>
										
										<?php
											$sql = "select * from texteditor where textindex = 'banner1'";
											$result = mysql_query($sql);
											if($row = mysql_fetch_array($result))
											{
												print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
											}
										?>										
										
										<br/><br/>
										<div class="btn_more"><a href="index.php">更多...</a></div>								
								</td>
							</tr>
						</table>
		  
				    </li>				
				    <li align = "center">
						<table style = "margin-left:50px;height:256px;width:650px;">
							<tr>
								<td valign = "top" align = "left" style = "padding-top:20px;width:250px;padding-left:90px;">
								 <img src="images/logo/wealth_logo.png" alt="恆創財富顧問有限公司" width = "225"/>
								</td>
								<td valign = "top" align = "left" width = "350px" style = "padding-top:20px;">
                                        <h2 style = "color:#26163d;">恆創財富顧問有限公司</h2>
										<?php
											$sql = "select * from texteditor where textindex = 'banner2'";
											$result = mysql_query($sql);
											if($row = mysql_fetch_array($result))
											{
												print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
											}
										?>		
										<br/><br/>
										<div class="btn_more"><a href="wealth.php">更多...</a></div>								
								</td>
							</tr>
						</table>
		  
				    </li>
					<li align = "center">
						<table style = "margin-left:50px;height:256px;width:650px;">
							<tr>
								<td valign = "top" align = "left" style = "padding-top:20px;width:240px;padding-left:80px;">
									<img src="images/logo/cfo_logo.png" alt="大中華家族辦公室有限公司" width = "190" />
								</td>
								<td valign = "top" align = "left" width = "395px" style = "padding-top:20px;">
                                        <h2 style = "color:#26163d;font-size:26px;" >大中華家族辦公室有限公司</h2>
										<?php
											$sql = "select * from texteditor where textindex = 'banner3'";
											$result = mysql_query($sql);
											if($row = mysql_fetch_array($result))
											{
												print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
											}
										?>		
										<br/><br/>
										<div class="btn_more"><a href="family.php">更多...</a></div>							
								</td>
							</tr>
						</table>					
                                
					</li>
					<li align = "center">
						<table  style = "margin-left:50px;height:256px;width:650px;">
							<tr>
								<td valign = "top" align = "left" style = "padding-top:10px;width:250px;padding-left:100px;">
									<img src="images/logo/School03.png" alt="貴族商學院有限公司 Nobility School Limited" width = "170" />
								</td>
								<td valign = "top" align = "left" width = "350px" style = "padding-top:20px;">
                                        <h2 style = "color:#26163d;">貴族商學院有限公司</h2>
										<?php
											$sql = "select * from texteditor where textindex = 'banner4'";
											$result = mysql_query($sql);
											if($row = mysql_fetch_array($result))
											{
												print str_replace("<p>", "", str_replace("</p>", "", $row["textarea"]));
											}
										?>		
										<br/><br/>
										<div class="btn_more"><a href="school.php">更多...</a></div>						
								</td>
							</tr>
						</table>						
					</li>
				</ul>
                <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
                <div class="cleaner"></div>
            	
            </div>
			
        </div>

		<div id="templatemo_content_wrapper">