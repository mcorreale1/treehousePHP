<?php
require_once('inc/products.php');
$products = get_products_all();

//Reverses the array, key is NOT preserved
$reverse = array_reverse($products);

//removes first item, saves it, but removes the ID
$removed = array_shift($products);

//Takes first value of array
$first = array_slice($products, 0, 1);


//last value of array
$last = end($products);
var_dump($last['sku']);

?>