<?php 
require_once('../inc/config.php');
require_once(ROOTPATH."inc/products.php");
$pageTitle = "Shirts";
$section = "shirts";
$itemsPerPage = 10;

$products = get_products_all();

//get number of pages
$pages = get_products_pages($itemsPerPage);

//default page 
$page=1;

//check to see if not on default page
if(isset($_GET["page"])){
    $page=$_GET["page"];
    //check if page below 1
    if($page < 1){ 
        $page = 1;
        header("location: ./");
    }
    //check if page above max
    else if($page > $pages){
        $page = $pages;
        header("location: ".BASEURL."shirts/page=".$page);
    }
}

//get displayed products
$displayedProducts = get_products_page($itemsPerPage, $page);

//Next/Prev page
$nextPage = ($page+1) % $pages;
$prevPage = (($page-1) % $pages);
//Make sure it doesnt go below 1
if($prevPage == 0) $prevPage = 4;

include(ROOTPATH.'inc/header.php'); ?>

<div class="section shirts page">

    <div class="wrapper">

        <h1>Mike&rsquo;s Full Catalog of shirts</h1>

        <ul class="products"> 
        <?php 

        foreach($displayedProducts as $product){
            if(!$product){
                echo '<br><a href="./">Click to go back to beginnning</a>';
                break;
            }
            else{
                echo get_list_view_html($product);
            }
        }
        

        ?>
        </ul>
        <div class="page nav">
            <div class="buttons">
            <?php
                //Next/prev pages
                echo '<a class="prev" href="./page='.$prevPage.'">Pevious Page</a>';
                echo '<a class="next" href="./page='.$nextPage.'">Next Page</a>';
            ?>
            </div>
            
            <div class ="numbers">
            <?php
            //Page numbers
            for($i = 1; $i <=$pages; $i++){
                if($i== $page){   
                    $currentPage=' on'; 
                }
                else { $currentPage = ''; }
                echo '<a class = "'.$currentPage.'" href="./page='.$i.'">'.$i.'</a>'; 
            }
            ?>
            </div>
        </div>         
    </div>
</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>