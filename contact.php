<?php
//browsers interpret output as HTML as default sothis allows "\n"
//wrapping the php in a <pre> tab does this
// TAKES THE name ATTRIBUTE OF THE HTML ELEMENT
	//only executes when POST action is sent to it
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if($name == "" OR $email == "" OR $message ==""){
		$error_message = "You must specify a name, email, and message.";
	}

	foreach ($_POST as $value) {
		if( stripos($value, 'Content-Type:') !== FALSE){
			$error_message = "There was a problem with the information you entered";
		}
	}

	if(trim($_POST["address"]) != ""){
		$error_message = "Error, please try again";
	}

	//inclues the mailing class
	require_once('PHPMailer/class.phpmailer.php');

	//Creates an is_object(var)
	$mail = new PHPMailer();

	// USE -> to call methods,s checks if Email is valid, but inverted
	if(!$mail->ValidateAddress($email)){
		$error_message = "You must specify a valid email address";
	}
	//checks for errors, if there isnt then it runs
	if(!isset($error_message)){
		$email_body = 
			"Name: ".$name."<br>"
			."Email: ".$email."<br>"
			."Message: ".$message;
		//Set an alternative reply-to address
		//Not needed because browers default to who it was set from
			//$mail->addReplyTo($email, $name);
	
		//Set who the message is to be sent from
		$mail->setFrom($email, $name);
	
		//Set who the message is to be sent to
		$address = "orders@shirts4mike.com";
	
		$mail->addAddress($address, 'Michael Correale');
	
		//Set the subject line
		$mail->Subject = "Shirts 4 mike contact form submission | ".$name;
	
		//sets body for email	
		$mail->msgHTML($email_body);
		//Attach an image file
			//$mail->addAttachment('images/phpmailer_mini.png');
		//send the message, check for errors
	
		//Runs the method, then check if it fits conditional
		if ($mail->send()) {
			//accessable through $_GET["status"]
			//status is the variable and thanks is what it holds
			header("location: contact.php?status=thanks&name=$name");
			exit;

		}
		else {
		    $error_message = "There was a problem: " . $mail->ErrorInfo;
		}
		
	}

	/*********************
	$_GET[] SENDS VARIABLES THROUGH URL (status=thanks)
	$_POST[] SENDS VARIABLES THROUGH HTTP PROTOCAL	
	*********************/

	//end of VERY FIRST conditional
}

?>
<?php $pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>
	<div class="section page">
		<div class="wrapper">
			<h1>Contact page</h1>
				<!-- isset() checks if it exists-->
			<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
				<p> Thanks for the email, <?php echo $_GET["name"]; ?>! </p>

			<?php } 
			else { ?>
 
			<p>I'd love to hear from you! Contact me </p>

			<!--Checks if theres an Error message and displays it-->

			<?php 
			if(isset($error_message)){
				echo '<p class="message">'.$error_message.'</p>';
			}
			?>

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
					<tr style="display: none;">
						<th>
							<label for="address">Address </label>
						</th>
						<td>
							<textarea type="text" name="address" id="address"></textarea>
							<p>NOT FOR HUMAN EYES, if you can see this LEAVE IT EMPTY</p> 
						</td>
					</tr>
				</table>
			<input type="submit" value="send">
			</form>
			<?php } ?>
		</div>
	</div>

<?php include('inc/footer.php'); ?>