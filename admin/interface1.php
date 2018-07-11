<?php session_start();
require("include.php");
if(!isset($_SESSION["adminID"]))
{
	if(isset($_COOKIE["adminID"]))
	{
		$adminID = $_COOKIE["adminID"];
		$expire=time()+60*60*24*30;
		setcookie("adminID", $adminID , $expire);		
	}
	else
	{
		?>
		<meta http-equiv="refresh" content="0; url=login.php">
		<?php		
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Noble Administration Site</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="stylesheets/theme.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css">

    <script src="lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!--<li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>-->
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> 
							<?php
								$adminID = $_SESSION["adminID"];
								
								$sql = "select loginID from admin where adminID = '$adminID'";
								$result = mysql_query($sql);
								if($row = mysql_fetch_array($result))
								{
									print $row["loginID"];
								}
							?>
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <!--<li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>-->
                            <li><a tabindex="-1" href="adminLogout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.php"><span class="first">Noble</span> <span class="second">Administration Site</span></a>
        </div>
    </div>
    


    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="editMain.php">主頁設定</a></li>
            <li ><a href="editWealth.php">恆創財富顧問設定</a></li>
            <li ><a href="editFamily.php">大中華家族辦公室設定</a></li>
            <li ><a href="editSchool.php">貴族商學院設定</a></li>
            <li ><a href="editContact.php">聯絡我們設定</a></li>
			<li ><a href="editBanner.php">Banner設定</a></li>
        </ul>
		<a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>講座設定</a>
		<ul id="dashboard-menu" class="nav nav-list collapse in">
			<li><a href="eventEditor.php">講座資料設定</a></li>
			<li><a href="event_joiner.php">講座參加者</a></li>
		</ul>
		<a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>會員設定</a>
		<ul id="dashboard-menu" class="nav nav-list collapse in">
			<li><a href="editMember.php">全部會員</a></li>
			<li><a href="course.php">課程時間表</a></li>
			<li><a href="file.php">文件</a></li>
		</ul>		
		<a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>管理員設定</a>
		<ul id="dashboard-menu" class="nav nav-list collapse in">
			<li><a href="adminSetting.php">管理員設定</a></li>
		</ul>		
    </div>
    

    
    <div class="content">
        
        <div class="header">
            
        </div>
        
		<ul class="breadcrumb">
            <!--<li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Dashboard</li>-->
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
			
					