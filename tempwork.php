<pre>
<?php
require_once('inc/products.php');

function get_products_pages($itemsPerPage){
    $all = get_products_all();
    $products = array();
    
    //Get # of elements, divide by items per page, round up
    $pages = ceil(count($all)/$itemsPerPage);
    var_dump(count($all));
    //change pages to int type
    settype($pages, "int");
    
    return($pages);
}

$all = get_products_all();
echo get_products_pages(10);

?>
</pre>