<?php include("inc/products.php"); 

$left_href = "#";
$right_href= "#";

//checks to see if ID is in URL
if(isset($_GET["id"])){
	//gets the ID from the url
	$product_id = $_GET["id"];
	//If it is, check to make sure its valid
	if(isset($products[$product_id])){
		$product = $products[$product_id];
	}	
}
//Check to see if product with the ID is invalid
if(!isset($product)){
	//If its not, redirect to shirts.php and exit out of code
	header("Location: shirts.php");
	exit();
}

$leftID = $product_id - 1;


$section ="shirts";
$pageTitle = $product["name"];
include("inc/header.php");
?>
	
	<div class="section shirt page">
		<div class="wrapper">

			<div class="breadcrumb">
				<a href="shirts.php">Shirts</a> &gt; <?php echo $product["name"]; ?> </div>

				<div class="shirt-picture">
					<span>
						<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
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
			<span><a href="<?php echo $left_href; ?>">Next Shirt</a></span>
		</div>
	</div>	

<?php include("inc/footer.php"); ?>

