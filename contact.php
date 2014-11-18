<?php
//browsers interpret output as HTML as default sothis allows "\n"
//wrapping the php in a <pre> tab does this
// TAKES THE name ATTRIBUTE OF THE HTML ELEMENT


	//only executes when POST action is sent to it
	$name;
	if($_SERVER["REQUEST_METHOD"]=="POST"){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		$email_body = 
			"Name: ".$name."\n"
			."Email: ".$email."\n"
			."Message: ".$message."\n";

		// TODO : send email
	
	//accessable through $_GET["status"]
		//status is the variable and thanks is what it holds
	header("location: contact.php?status=thanks&name=$name");
	
	//immediatly stop all PHP processes	
	exit;

	/*********************
	$_GET[] SENDS VARIABLES THROUGH URL (status=thanks)
	$_POST[] SENDS VARIABLES THROUGH HTTP PROTOCAL	
	*********************/
}

?>
<?php $pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>
	<div class="section page">
		<div class="wrapper":>
			<h1>Contact page</h1>
				<!-- isset() checks if it exists-->
			<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
				<p> Thanks for the email, <?php echo $_GET["name"]; ?>! </p>

			<?php } 
			else { ?>
 
			<p>I'd love to hear from you! Contact me </p>

			<!-- Send this form to PHP file in action attribute -->
			<form method="post" action="contact.php">

				<table>
					<tr>
						<th>
							<label for="name">Name </label>
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for="email">Email </label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for="message">Message </label>
						</th>
						<td>
							<textarea type="text" name="message" id="message"></textarea> 
						</td>
					</tr>
				</table>
			<input type="submit" value="send">
			</form>
			<?php } ?>
		</div>
	</div>

<?php include('inc/footer.php'); ?>