<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/reactive.css" type="text/css">
	<link rel="shortcut icon" href="<?php echo BASEURL; ?>favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!--<script src = "../scripts/jquery/src/jquery.js"></script>-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="<?php echo BASEURL; ?>">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if($section == "shirts"){echo "on";} ?>"><a href="<?php echo BASEURL; ?>shirts/">Shirts</a></li>
				<li class="contact <?php if($section == "contact"){echo "on";} ?>"><a href="<?php echo BASEURL; ?>contact/">Contact</a></li>
				<li class="search <?php if($section == "search"){echo "on";} ?>"><a href="<?php echo BASEURL; ?>search/">Search</a></li>

				<li class="cart"><a href="<?php echo BASEURL; ?>receipt/">Cart</a></li>

			</ul>

		</div>

	</div>

	<div id="content">