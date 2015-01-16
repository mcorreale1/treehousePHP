<?php

require_once("../inc/config.php");
include("../inc/products.php");

$pageTitle = "Thank you for your order";
$section = "none";
$products = get_products_all();
$recent = get_products_recent();

include(ROOTPATH . 'inc/header.php');
?>
	<div class="section page">
		<div class="wrapper">
			<h1>Thank You!</h1>
			<p>Your order has been recieved and will be sent out soon</p>
			<p>Want another shirt? Go back to the 
				<a href="<?php echo BASEURL; ?>shirts/">Shirts Listing Page</a>
				to get more sweet shirts!</p>
            <ul class="products">
					<?php 
        $test = strtolower($recent[0]["name"]);
            if(is_int(strpos($test, "edst"))){
                echo strpos(trim($test), "et");
            }
            else{
                echo "no";
            }
					?>							
				</ul>
		</div>
	</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>