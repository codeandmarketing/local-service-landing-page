		</div>
	</div> <!-- End Main Content -->

	<div class="wrapper footer_row">
		<div class="wrapper-container">
			<footer class="text-center">
				<h2>
					<?php echo $site_name; ?>
				</h2>
				<p>
					&copy; <?php echo date('Y'); ?> <a href ="/" title="Home"><?php echo $site_name; ?></a> | All Rights Reserved | <a href="/sitemap.xml" title="XML Sitemap">XML Sitemap</a> | <a href="/service-locations" title="Service Locations">Service Locations</a> | <a href="/terms-privacy-policy" rel="nofollow" target="_blank" title="Terms & Privacy Policy">Terms & Privacy Policy</a> | Call <?php echo $phone_link; ?>
				</p>
			</footer>
		</div>
	</div>
		

	<!-- <link rel="stylesheet" type="text/css" href="/views/template_parts/css/style.css"> -->


	<script>
		//Hamburger
		function toggle_nav(){
			var element = document.getElementById("primary_nav");

			if (element.classList.contains("show")) {
	  			element.classList.add("hide");
	  			element.classList.remove("show");
			} else{
	  			element.classList.add("show");
	  			element.classList.remove("hide");
			}
			return;
		}
		//Social Share
		function share_page(share_url){
			window.location.href = share_url;
			return;
		}
	</script>

	<?php 
		echo $gtag_link; 
		echo $gtag_analytics;
	?>

</body>
</html>