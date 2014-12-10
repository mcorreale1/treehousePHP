<?php 
require_once('../inc/config.php');
require_once(ROOTPATH."inc/products.php");
$pageTitle = "Shirts";
$section = "shirts";
$products = get_products_all();
include(ROOTPATH.'inc/header.php'); ?>

	<div class="section shirts page">

		<div class="wrapper">

			<h1>Mike&rsquo;s Full Catalog</h1>

			<ul class="products"> 
				<?php foreach ($products as $product) { 
					echo get_list_view_html($product);
				} ?>
			</ul>

		</div>

	</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>