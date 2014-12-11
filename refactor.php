<pre><?php
include('inc/products.php');

//Reverses the array, key is NOT preserved
$reverse = array_reverse($products);

//removes first item, saves it, but removes the ID
$removed = array_shift($products);

var_dump($removed);

?></pre>