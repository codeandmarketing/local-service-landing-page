<?php
require_once('./views/__landing_pages/random_content/power-washing.php');
require_once('./views/template_parts/includes/header.php');
?>

	<div id="content" class=" flex-grid">
<!--  -->
<main>
			<h1><?php echo $title; ?></h1>
			<h2>Residential & Commercial</h2>
			<div class="flex-grid">
				<div class="col">
					<img src="./views/template_parts/img/vinyl-siding-power-washing.jpeg" alt="<?php echo $location_text; ?> Power Washing Services & Pressure Washing Services - Vinyl Siding Cleaning">
				</div>
			</div>
			<!-- Define The Business -->
			<h2><?php echo $site_name; ?> provides the highest quality service at an affordable price. <strong>Call us now to receive $25 off your service.</strong> <br><?php echo $phone_link; ?>.</h2>
			<p>
				<?php r($define_business); ?>
			</p>
			<p>
				<?php r($define_why); ?>
			</p>
				<?php r_list($define_services, 'ul') ?>

			<hr>
			<h2><?php r($define_recent_work_title) ?></h2>
			<p>
				<?php r($define_recent_work_text); ?>
			</p>



			<div class="flex-grid">
				<div class="col">
					<img src="./views/template_parts/img/st-clair-brick-power-washing-2.jpeg" alt="<?php echo $location_text; ?> Brick Power Washing Services & Pressure Washing Services - Brick Cleaning">
				</div>
				<div class="col">
					<img src="./views/template_parts/img/st-clair-brick-power-washing-1.jpeg" alt="<?php echo $location_text; ?> Brick Power Washing Services & Pressure Washing Services - Brick Cleaning">
				</div>
			</div>

			<div class="flex-grid">
				<div class="col">
					<img src="./views/template_parts/img/st-clair-roof-cleaning.jpeg" alt="<?php echo $location_text; ?> Roof Cleaning Services">
				</div>
				<div class="col">
					<img src="./views/template_parts/img/concrete-cleaning-driveway-power-washing.jpeg" alt="<?php echo $location_text; ?> Driveway Power Washing & Concrete Cleaning">
				</div>
			</div>



			
			<!-- Social Proof -->
			<hr>
			<h2>See what our customers in are saying. Call <?php echo $phone_link; ?> for your own quote!</h2>

			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"I was amazed at how fast they power washed my house. The other guy took three times as long and cost double! I'll use them again in the future."</i>
					</p>
					<p>
						- Terry White
					</p>
				</div>
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"It was pretty suspiring to see how clean my vinyl siding came out. It looks like new now."</i>
					</p>
					<p>
						- Adam Richfield
					</p>
				</div>
			</div>
			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"My two story colonial came out spotless. I am happy to use a company that was so professional and courteous. They even walked around the property to make sure I was happy."</i>
					</p>
					<p>
						- Beth Powers
					</p>
				</div>
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"The before and after is really something else. I showed my mother and she instantly booked for her house."</i>
					</p>
					<p>
						- Deborah Robbinson
					</p>
				</div>
			</div>
			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"I can finally relax knowing that my husband is not out there risking falling off the ladder. Thanks guys!"</i>
					</p>
					<p>
						- Leanne Kennedy
					</p>
				</div>
				<div class="col">
					<p>
						<span class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
						
						<br><i>"Best decision ever. Perfect power washing service and at great price."</i>
					</p>
					<p>
						- Andrew Sarangan
					</p>
				</div>
			</div>
			<p class="text-center">
				Did We Do A Good Job For You? <a href="/review" target="_blank" rel="nofollow">Please Review Us Here</a>
				<br>
				We're proud of our reviews and looking forward to yours!
				<br>
				<br>
				<?php echo $review_no_schema; ?>
			</p>
			

			<!-- objection handling -->
			<hr>
			<h2>Answers To Your Questions About <?php echo $keyword . ' In ' . $location_text; ?></h2>
			<p>
				<b>Q:</b> Are You Insured?
				<br>
				<b>A:</b> Yes, we have an extensive insurance policy that covers both residential and commercial work.
			</p>
			<p>
				<b>Q:</b> Do Offer A Guarantee?
				<br>
				<b>A:</b> We offer a 100% satisfaction guarantee. If you are not completely satisfied we will make it right, or refund money.
			</p>
			<p>
				<b>Q:</b> How Much Does It Cost?
				<br>
				<b>A:</b> Cost will very depending on the type of job and the size of the job. Most jobs are quoted in person, but in some cases can be done over the phone. Give us at call at <?php echo $phone_link; ?>
			</p>
			<p>
				<b>Q:</b> How Soon Can You Come Out?
				<br>
				<b>A:</b> Typically we can make it out in a few days, however during the early summer we may be booked out a week in advance.
			</p>
			<p>
				<b>Q:</b> Will it harm my plants?
				<br>
				<b>A:</b> Absolutely not! Your plants will be completely safe. We use low pressure and environmentally friendly chemicals to clean with.
			</p>


			<!-- meet owner or satisfaction -->
			<hr>
			<h2>100% Satisfaction Guaranteed & Our Promise To You!</h2>
			<div class="flex-grid">
				<div class="col">
					<p class="text-center">
						<img src="./views/template_parts/img/st-clair-shores-power-washing-satisfaction-300x300.png" alt="" style="max-height:300px; width:auto;">
					</p>
				</div>
				<div class="col">
					<p>
						We stand behind our work and have no problem giving a guarantee when others won't. <strong>If you are not 100% satisfied please let us know, and we will make it right, or refund your money</strong>.
					</p>
					<ul>
						<li>&#x2714; Insured</li>
						<li>&#x2714; Certified</li>
						<li>&#x2714; Professionally Trained</li>
						<li>&#x2714; 100% Satisfaction Guaranteed</li>
						<li>&#x2714; Highest Quality Around</li>
					</ul>
					<p>
						Call <?php echo $phone_link; ?> Now To Request Your Free No-Obligation Quote.
					</p>
				</div>
			</div>
		</main>
		<aside>
			<?php $landing_page = true; ?>
			<?php require_once('./views/template_parts/includes/sidebar_primary.php');?>

		</aside>
	</div>

	

<?php require_once('./views/template_parts/includes/footer.php');?>