<?php
require_once('inc/config.php');
include('inc/products.php');
$products = get_products_all();
$recent = get_products_recent();
$pageTitle="Tshirts 4 Mike";
$section ="index";
include(ROOTPATH.'inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASEURL; ?>shirts/">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">
			<div class="wrapper">
				<h1>Mike&rsquo;s Latest Shirts</h1>

				<ul class="products">
					<?php 
						$list_view_html = "";
						foreach ($recent as $product) {
							$list_view_html = get_list_view_html($product) . $list_view_html;
						}
						 
						echo $list_view_html;
					?>							
				</ul>

			</div>

		</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>