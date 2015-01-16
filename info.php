<?php 

require_once('inc/config.php');
include('inc/products.php');
$pageTitle="Information";
$section="info";
$products = get_products_all();
include(ROOTPATH.'inc/header.php');
?>

	<div class="section page">
		<div class="wrapper">
			<h1>Information</h1>     
		</div>
	</div

<?php
?>


<?php include(ROOTPATH.'inc/footer.php'); ?>