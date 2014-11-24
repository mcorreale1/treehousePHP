<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="stylesheet" href="css/reactive.css" type="text/css">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if($section == "shirts"){echo "on";} ?>"><a href="shirts.php">Shirts</a></li>
				<li class="info <?php if($section == "info"){echo "on";} ?>"><a href="info.php">Info</a></li>
				<li class="contact <?php if($section == "contact"){echo "on";} ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a href="#">Cart</a></li>

			</ul>

		</div>

	</div>

	<div id="content">