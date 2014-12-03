<?php
include('inc/products.php');
$pageTitle="Tshirts 4 Mike";
$section ="index";
include('inc/header.php'); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
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
						$total_products = count($products);
						$position = 0;
						$list_view_html = "";

						foreach ($products as $product_id => $product) {
							//increments
							$position = $position + 1; 

							//only will print out last 4 values
							if($total_products - $position < 4){
								//adds each value to the beginning of the string
								$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
							}
						} 
						echo $list_view_html;
					?>							
				</ul>

			</div>

		</div>

<?php include('inc/footer.php'); ?>