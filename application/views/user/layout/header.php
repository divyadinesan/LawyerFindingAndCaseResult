<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>FIND LAWYER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Law Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('Asset/User/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Asset/User/css/style.css')?>" rel='stylesheet' type='text/css' />
<link href='<?php echo base_url('Asset/User///fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Six+Caps')?>' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?php echo base_url('Asset/User/css/flexslider.css')?>" type="text/css" media="screen" />
<script src="<?php echo base_url('Asset/User/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Asset/User/js/bootstrap.js')?>"></script>
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<h1><a href="<?php echo base_url('index.php/User_controller/user_home')?>"><img src="<?php echo base_url('Asset/User/images/law.png')?>" style="height: 90px;width:140px"></a></h1>
			</div>
			
			
			<div class="navigation">
				 <nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--/.navbar-header-->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					 <li class="active"><a href="<?php echo base_url('index.php/user_controller/user_home')?>">Home</a></li>
						<li><a href=" <?php echo base_url('index.php/user_controller/my_case')?>">Case Request</a></li>
						<li><a href="<?php echo base_url('index.php/user_controller/case_result')?>">Case Result Status</a></li>
						
						<li><a href="<?php echo base_url('index.php/user_controller/my_profile')?>">My Profile</a></li>
						<li><a href="<?php echo base_url('index.php/user_controller/logout')?>">Logout</a></li>
					</ul>
				</div>
				<!--/.navbar-collapse-->
			</nav>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->