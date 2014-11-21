<?php include("inc/products.php"); 
	//gets the ID from the url
$product_id = $_GET["id"];
$product = $products[$product_id];

$section ="shirts";
$pageTitle = $product["name"];
include("inc/header.php");
?>
	
	<div class="section page">
		<div class="wrapper">

			<div class="breadcrumb">
				<a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?> </div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				

		</div>
	</div>	

<?php include("inc/footer.php"); ?>

