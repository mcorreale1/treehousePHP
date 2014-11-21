<pre><?php
	$flavors = array("Vanilla","Chocolate","Strawberry");
	$countries = array();
	$countries[0] = array(
		"code" => "US",
		"name" => "United States"
	);
	$countries[1] = array(
		"code" => "DE",
		"name" => "Germany"
	);
		// Works like a normal 2d array
var_dump($countries[0]["code"]);
?></pre>

<!-- <html>
	<body>
	<?php foreach ($flavors as $flavor) { ?>
			<div><?php echo $flavor; ?></div>
		<?php } ?>
	 <div><?php echo $country["code"]; ?></div>
</body>
</html> -->
