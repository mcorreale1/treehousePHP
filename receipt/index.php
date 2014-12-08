<?php

require_once("../inc/config.php");

$pageTitle = "Thank you for your order";
$section = "none";


include(ROOTPATH . 'inc/header.php');
?>
	<div class="section page">
		<div class="wrapper">
			<h1>Thank You!</h1>
			<p>Your order has been recieved and will be sent out soon</p>
			<p>Want another shirt? Go back to the 
				<a href="<?php echo BASEURL; ?>shirts/">Shirts Listing Page</a>
				to get more sweet shirts!</p>
		</div>
	</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>