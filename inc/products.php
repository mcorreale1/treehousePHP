<?php

    //Builds an output string for shirts and index
function get_list_view_html($product){
    //Build HTML output

    $output ="";
    $output = $output . "<li>";
    $output = $output . '<a href="' .BASEURL. 'shirts/' . $product["sku"] . '/">';
    $output = $output . '<img src="'.BASEURL.$product["img"].'" alt="'. $product["name"] . '">';
    $output = $output . "<p>View Details</p>";
    $output = $output . "</a>";
    $output = $output . "</li>";
    return $output;
}

function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;

    foreach ($all as $product) {
        $position = $position + 1;
        if($total_products - $position < 4){
            $recent[] = $product;
        }
    }
    return $recent;
}

function get_product($product_id){

    $all = get_products_all();
    if(isset($all[$product_id])){
        return $all[$product_id];
    } 
    else{
        return false; 
    }  
}

function get_next_product($product_id, $direction){
    $all = get_products_all();
    
    //Do if going right
    if($direction = "next"){
        $new_id = $product_id + 1;

        if(get_product($new_id)){
            return $new_id;
        }
        else{
            return $products[101];
        }
    }

    //Do if going left
    else if($direction=="left"){
        $new_id = $product_id - 1;

        if(get_product($new_id)){
            return $new_id;
        }
        else {
            return end($all);
        }
    }

}

function get_products_all(){
    $products = array();
    $products[101] = array(
        "name" => "Logo Shirt, Red",
        "img" => "img/shirts/shirt-101.jpg",
        "sizes" => array("Small","Medium","Large","X-Large"),
        "price" => 18 
    );
    $products[102] = array(
        "name" => "Mike the Frog Shirt, Black",
        "img" => "img/shirts/shirt-102.jpg",
        "sizes" => array("Small","Medium","Large","X-Large"),
        "price" => 20
    );
    $products[103] = array(
        "name" => "Mike the Frog Shirt, Blue",
        "img" => "img/shirts/shirt-103.jpg",  
        "sizes" => array("Small","Medium","Large","X-Large"),  
        "price" => 20
    );
    $products[104] = array(
        "name" => "Logo Shirt, Green",
        "img" => "img/shirts/shirt-104.jpg",  
        "sizes" => array("Small","Medium","Large","X-Large"),  
        "price" => 18
    );
    $products[105] = array(
        "name" => "Mike the Frog Shirt, Yellow",
        "img" => "img/shirts/shirt-105.jpg",  
        "sizes" => array("Small","Medium","Large","X-Large"),  
        "price" => 25
    );
    $products[106] = array(
        "name" => "Logo Shirt, Gray",
        "img" => "img/shirts/shirt-106.jpg",    
        "sizes" => array("Small","Medium","Large","X-Large"),
        "price" => 20
    );
    $products[107] = array(
        "name" => "Logo Shirt, Turquoise",
        "img" => "img/shirts/shirt-107.jpg",  
        "sizes" => array("Small","Medium","Large","X-Large"),  
        "price" => 20
    );
    $products[108] = array(
        "name" => "Logo Shirt, Orange",
        "img" => "img/shirts/shirt-108.jpg",    
        "sizes" => array("Large","X-Large"),
        "price" => 25,
    );

    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }
    return $products;
}
?>