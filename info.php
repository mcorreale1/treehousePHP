<?php 

require_once('inc/config.php');

$pageTitle="Information";
$section="info";
include(ROOTPATH.'inc/header.php');
?>
`
	<div class="section page">
		<div class="wrapper">
			<h1>Information</h1>
            
            <pre>
                <?php
                    //Testing STR Pos string
                    echo strpos("cookie dough","oo");
                ?>
            </pre>
            
            
		</div>
	</div>

	


<script>

	$(document).ready(function(){
	 	$(".h1").mouseenter(function(){
	   	 	$(this).hide();
	  	},function(){
	  		$(this).show();
	  	});
	  // 	$(".section.page .wrapper h1").mouseout(function(){
	  //  	 	$(this).show();
	  // });
	});

	</script>

<?php include(ROOTPATH.'inc/footer.php'); ?>