<?php SESSION_START(); ?>
<?php require("include.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
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
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Noble</span> <span class="second">Administration Site</span></a>
        </div>
    </div>
    <div class="row-fluid">
        <div class="dialog">
            <div class="block">
                <p class="block-heading">Sign In</p>
                <div class="block-body">
					<?php	
						
						$error = "";
						if(isset($_POST["action"]))
						{
							if(!isset($_POST["adminLoginID"]))
							{
								$error .= "請輸入登入ID<br/>";
							}
							if(!isset($_POST["adminPassword"]))
							{
								$error .= "請輸入登入密碼<br/>";
							}
							if(!isset($_POST["vCode"]))
							{
								$error .= "請輸入驗證碼";
							}
							else if($_POST["vCode"] != $_SESSION["vCode"])
							{
								$error .= "驗證碼錯誤";
							}
							if($error == "")
							{
								$loginID = $_POST["adminLoginID"];
								$password = $_POST["adminPassword"];
								$sql = "select adminID from admin where loginID = '$loginID' and password = '$password'";
								$result = mysql_query($sql);
								if($row = mysql_fetch_array($result))
								{
									$adminID = $row["adminID"];
									$_SESSION["adminID"] = $adminID;									
									$expire=time()+60*60*24*30;
									setcookie("adminID", $adminID , $expire);							
									?>
									<script>
										alert("登入成功");
										window.location = "index.php";
									</script>									
									<?php
								}
							}
						}
						
					?>
					<?php 
						if(!isset($_SESSION["vCode"]))
						{
							$_SESSION["vCode"] = "AAA";
						}						
					?>					
                    <form action = "login.php" method = "POST">
						<input type = "hidden" value = "action" name = "action">						 
                        <label>登入ID</label>
						<input type = "text" ID = "adminLoginID" name = "adminLoginID" class = "span12">                        
                        <label>密碼</label>                   
						<input type = "password" ID = "adminPassword" name = "adminPassword" class = "span12">
                        <label>驗證碼</label>                   
						<input type = "text" ID = "vCode" name = "vCode" class = "span12">						
						<img src="captcha_code_file.php" alt="CAPTCHA image" align="top" class = "noClass" />
						<input type = "submit" ID = "loginBtn"  class="btn btn-primary pull-right" value = "登入">                        
                        
						<!--<a href="index.html" class="btn btn-primary pull-right">Sign In</a>-->
                        <!--<label class="remember-me">                            
                            <asp:CheckBox runat = "server" ID = "rememberCb" />記錄密碼
                        </label>-->

                        <label><?php print $error;?></label>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function () {
            $('.demo-cancel-click').click(function () { return false; });
        });
    </script>
    
  </body>
</html>
