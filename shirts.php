<?php 

$products = array();
//adds individual items to array
//number in [] is the key, a unique identifier 
$products[101] = "Logo Shirt, Red";
$products[102] = "Mike The Frog Shirt, Black";
$products[103] = "Mike The Frog Shirt, Blue";
$products[104] = "Logo Shirt, Green";

$pageTitle = "Shirts";
$section = "shirts";
include('inc/header.php'); ?>

	<div class="section page">

		<div class="wrapper">

			<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

			<ul>
				<?php foreach ($products as $product) { ?>
					
					<li><?php echo $product; ?></li>

				<?php } ?>
			</ul>






		</div>

	</div>

<?php include('inc/footer.php'); ?>