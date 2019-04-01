<?php
$title = "$site_name - Leave A Review";
$meta = "Thanks for chosing our services. Please fill out the form to leave a review.";
$mail_sent = 'false';


if ( isset($_POST['spam_check']) && ! empty($_POST['spam_check']) ) {
		$mail_sent = 'true';	
}



require_once('./views/template_parts/includes/header.php');
?>

	<div id="content" class=" flex-grid">
		<main>
			<h1>Please Leave A Review</h1>
			<p>
				Thank you for taking the time to leave us a review. We are happy to have serviced your property. If you have any issues please let us know by calling us at <?php echo $phone_link; ?>.
			</p>
			<form action="" method="POST">
			    <label for="full_name">Your Name</label>
			    <input required type="text" id="full_name" name="full_name" placeholder="Your Name">
				<br>
				<label for="email">Your Email</label>
			    <input required type="email" id="email" name="email" placeholder="info@example.com">
				<br>
			    <label for="Rating">Your Rating</label>
			    <select id="rating" name="rating">
		    		<option value="1">1</option>
		    		<option value="2">2</option>
		    		<option value="3">3</option>
		    		<option value="4">4</option>
		    		<option selected value="5">5</option>
			    </select>
				<br>
			    <label for="review">Your Review</label>
			    <textarea required id="review" name="review" placeholder="Please write your review here."></textarea>
				<br>
				<label for="spam_check">Spam Check: What is two plus three</label>
			    <input required type="text" id="spam_check" name="spam_check" placeholder="">
				<br>
			    <input type="submit" value="Submit">
			</form>
		</main>	
	</div>

	

<?php require_once('./views/template_parts/includes/footer.php');?>
<script>
	if (<?php echo $mail_sent; ?>) {
		alert('Your Review Has Been Sucessfully Submitted. You Will See Your Review Posted Once It Has Been Processed.');
	}
</script>