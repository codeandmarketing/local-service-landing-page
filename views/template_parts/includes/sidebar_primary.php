<p>
	<b>Services</b><br>
	<a href="/" title="Power Washing">Power Washing</a><br>
	<a href="/gutter-cleaning" title="Gutter Cleaning">Gutter Cleaning</a><br>
	<a href="/roof-cleaning" title="Roof Cleaning">Roof Cleaning</a>
	<br>
	<b>Deck Restoration</b>
	<br>
	<b>Vinyl Siding Cleaning</b>
	<br>
	<b>Brick Cleaning</b>
	<br>
	<b>Concrete Cleaning</b>
</p>
<?php 
	if ( ! $landing_page ){

		echo $default_gmap; 

	}else{

		$location_text = str_replace(' ', '%20', $location_text);
		$location_text = str_replace(',', '', $location_text);
		echo '<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=' . $location_text . '&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';

	}
?>
<p>
	<?php echo $local_nap_schema; ?>
	<?php

		if (! $is_home) {
			echo $review_schema;
		}

		if (! $landing_page ) {
			echo 'Local Websites: ';
			echo $location_indicatior_links;
		}
	 ?>
</p>