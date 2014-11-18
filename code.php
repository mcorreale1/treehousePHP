<?php
	$flavors = array("Vanilla","Chocolate","Strawberry");
	$country = array(
		//key,    Value
		"code" => "US",
		"name" => "United States"
	);
	

?>
<html>
	<body>
	<?php foreach ($flavors as $flavor) { ?>
			<div><?php echo $flavor; ?></div>
		<?php } ?>
	 <div><?php echo $country["code"]; ?></div>
</body>
</html>
