<?php

require_once('../inc/config.php');

$pageTitle = "Search";
$section = "search";

$search_term = "";

if(isset($_GET['s'])){
	$search_term = trim($_GET['s']);
	if($search_term != ""){
		require_once(ROOTPATH.'inc/products.php');
		$products = get_products_search($search_term);
	}
}

include(ROOTPATH . 'inc/header.php');
?>

<div class="section shirts search page">

	<div class="wrapper">

		<h1>Search</h1>

		<form method="GET" action="./">
			<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
			<input type="submit" value="Go">
		</form>
		<?php
		
        if($search_term != ""){

            if(!empty($products)){

                echo '<ul class="products">';
                foreach ($products as $product) {
                    echo get_list_view_html($product);
                }

                echo '<ul>';
            }
            else {
                echo '<p>No products were found matching that search term</p>';}
        }

		?>
	</div>

</div>


<?php include(ROOTPATH.'inc/footer.php'); ?>