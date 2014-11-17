<?php $pageTitle = "Contact Mike";
$section = "contact";
include('inc/header.php'); ?>
	<div class="section page">
		<div class="wrapper":>
			<h1>Contact page</h1>
			<p>I'd love to hear from you! Contact me </p>

			<!-- Send this form to PHP file in action attribute -->
			<form method="post" action="contact-process.php">

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
		</div>
	</div>

<?php include('inc/footer.php'); ?>