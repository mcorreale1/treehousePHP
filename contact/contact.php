<?php

require_once('../inc/config.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]);

	if($name == "" OR $email == "" OR $message ==""){
		$error_message = "You must specify a name, email, and message.";
	}

	foreach ($_POST as $value) {
			//Prevents attacks
		if( stripos($value, 'Content-Type:') !== FALSE){
			$error_message = "There was a problem with the information you entered";
		}
	}

	if(trim($_POST["address"]) != ""){
		$error_message = "Error, please try again";
	}

	//inclues the mailing class
	require_once(ROOTPATH.'inc/PHPMailer/class.phpmailer.php');

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
            
            //Send this URL, and rewrite it using rewrite rules
			header("location: ".BASEURL."contact/thanks?name=".$name);
			exit;

		}
		else {
		    $error_message = "There was a problem: " . $mail->ErrorInfo;
		}
		
	}

	/*********************
	NOTES
	$_GET[] SENDS VARIABLES THROUGH URL (status=thanks)
	$_POST[] SENDS VARIABLES THROUGH HTTP PROTOCAL	
	stripos() function prevents attack
	htmlspecialchars() prevents injection
	*********************/



	//end of VERY FIRST conditional
}

?>
<?php $pageTitle = "Contact Mike";
$section = "contact";
include(ROOTPATH.'inc/header.php'); ?>
	<div class="section page">
		<div class="wrapper">
			<div class="form">
				<h1>Contact Us!</h1>
					<!-- isset() checks if it exists-->
				<?php if(isset($_GET["name"])) { ?>
					<p> Thanks for the email, <?php echo htmlspecialchars($_GET["name"]); ?>! </p>

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
				<form method="post" action="<?php echo BASEURL; ?>contact/">

					<table>
						<tr>
							<th>
								<label for="name">Name </label>
							</th>
							<td>
								<input type="text" name="name" id="name" 
										value="<?php if(isset($name)){echo htmlspecialchars($name);} ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label for="email">Email </label>
							</th>
							<td>
								<input type="text" name="email" id="email"
										value="<?php if(isset($email)){echo htmlspecialchars($email);} ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label for="message">Message </label>
							</th>
							<td>
								<textarea type="text" name="message" 
									id="message"><?php if(isset($message)){echo htmlspecialchars($message);} ?></textarea> 
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
			<div class ="info">
				<h1>Other ways to contact Mike!</h1>
				<p> 19 Fishermans Drive</p>
			</div>

		</div>
	</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>