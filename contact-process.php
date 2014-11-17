
<?php include("inc/header.php"); ?>
<pre><?php
//browsers interpret output as HTML as default sothis allows "\n"
//wrapping the php in a <pre> tab does this
// TAKES THE name ATTRIBUTE OF THE HTML ELEMENT
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "Name: ".$name."\n"
	."Email: ".$email."\n"
	."Message: ".$message."\n";

// TODO : send email

$pageTitle = "Contact Mike";
$section = "contact";
?></pre>

	<div class="section page">
		<div class = "wrapper">
			<h1>Contact</h1>
			<p>Thanks for the email!</p>
		</div>
	</div>
	
<?php include("inc/footer.php"); ?>