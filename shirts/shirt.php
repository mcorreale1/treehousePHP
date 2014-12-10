<?php 
	require_once('../inc/config.php');
	require_once(ROOTPATH . 'inc/products.php'); 
$products = get_products_all();



//checks to see if ID is in URL
if(isset($_GET["id"])){
	//If it is, get product
	$product = get_product($_GET["id"]);	
}
//Check to see if product with the ID is invalid
if($product==false){
	//If its not, redirect to shirts.php and exit out of code
	header("Location: ".BASEURL."shirts/");
	exit();
}

$left_id = get_next_product($product["sku"], "left");
$right_id = get_next_product($product["sku"], "right");

$left_href = BASEURL. 'shirts/' . $products[$left_id]["sku"]."/";
$right_href= BASEURL. 'shirts/' . $products[$right_id]["sku"]."/";

$section ="shirts";
$pageTitle = $product["name"];
include(ROOTPATH."inc/header.php");
?>
	
	<div class="section shirt page">
		<div class="wrapper">

			<div class="breadcrumb">
				<a href="<?php echo BASEURL; ?>shirts/">Shirts</a> &gt; <?php echo $product["name"]; ?> </div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo BASEURL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
					</span>
				</div>

				<div class ="shirt-details">

					<h1>
						<span class="price">$<?php echo $product["price"]; ?> </span>
						<?php echo $product["name"]; ?> 
					</h1>

					<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
						<input type="hidden" name="item_name" value="<?php echo $product["name"]; ?>">
						<table>
						<tr>
							<th>
								<input type="hidden" name="on0" value="Size">
								<label for="os0">Size</label>
							</th>
							<td>
								<select name="os0" id="os0">
									<?php foreach($product["sizes"] as $size) { ?>
									<option value="<?php echo $size; ?>"><?php echo $size; ?> </option>
									<?php } ?>
								</select>
							</td>
						</tr>
						</table>
						<input type="submit" value="Add to Cart" name="submit">
					</form>

					<p class="note-designer">* All shirts are designed by Mike the Frog</p>
				</div>
		</div>
		<div class="page left">
			<span><a href="<?php echo $left_href; ?>">Previous Shirt</a></span>
		</div>
		<div class="page right">
			<span><a href="<?php echo $right_href; ?>">Next Shirt</a></span>
		</div>
	</div>	

<?php include(ROOTPATH."inc/footer.php"); ?>

