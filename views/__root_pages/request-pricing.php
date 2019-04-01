<?php
$title = "$site_name - Request Pricing";
$meta = "Contact us today to recieve an instant quote for your power washing services.";
$mail_sent = 'false';


if ( isset($_POST['spam_check']) && ! empty($_POST['spam_check']) ) {
	if ($_POST['spam_check'] == 5 || strtolower($_POST['spam_check']) == 'five') {
		$to = "ah2487970060@gmail.com";
		$subject = "$site_name Submission";
		$txt = $_POST['full_name'] . ", " . $_POST['about'] . ", " . $_POST['message'] . ", ";
		$headers = "From: " . $_POST['email'] . "\r\n";// . "CC: somebodyelse@example.com";

		mail($to,$subject,$txt,$headers);

		$mail_sent = 'true';	
	}else{

	}
}



require_once('./views/template_parts/includes/header.php');
?>

	<div id="content" class=" flex-grid">
		<main>
			<h1>Request Pricing</h1>
			<p>
				<?php echo $local_nap_schema; ?>
			</p>
			<form action="" method="POST">
			    <label for="full_name">Your Name</label>
			    <input required type="text" id="full_name" name="full_name" placeholder="Your Name">
				<br>
				<label for="email">Your Email</label>
			    <input required type="email" id="email" name="email" placeholder="info@example.com">
				<br>
			    <label for="about">How Can We Help You?</label>
			    <select id="about" name="about">
		    		<option value="Select One">Select One</option>
		    		<option value="Power Washing">Power Washing</option>
		    		<option value="Gutter Cleaning">Gutter Cleaning</option>
		    		<option value="Commercial Services">Commercial Services</option>
			    </select>
				<br>
			    <label for="message">Message</label>
			    <textarea required id="message" name="message" placeholder="Please write your message here."></textarea>
				<br>
				<label for="spam_check">Spam Check: What is two plus three (Hint, Answer Is 5)</label>
			    <input required type="text" id="spam_check" name="spam_check" placeholder="">
				<br>
			    <input type="submit" value="Submit">
			</form>
		</main>	
	</div>

	

<?php require_once('./views/template_parts/includes/footer.php');?>
<script>
	if (<?php echo $mail_sent; ?>) {
		alert('Form Successfully Submitted');
	}
</script>