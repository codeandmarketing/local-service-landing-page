<?php 


// Site Information
$url_for_sitemap = "https://stclairpowerwashing.com"; 
$site_name = "St. Clair Power Washing";
$phone_number = '555-555-5555';
$site_city = 'St Clair';
$site_state = 'MI';
$schema_email = 'sales@stclairpowerwashing.com';
$logo_url = '';
$google_my_business_url = '';
$business_latitude = '';
$business_longitude = '';
$business_hours_nap = 'Sn, Mo, Tu, We, Th, Fr, St 08:00-20:00';
$business_hours = 'Open: Sun, Mon, Tue, Wed, Thur, Fri, Sat,  08:00AM - 8:00PM';
$google_card_image_url = '';
$rating_value = '5';
$rating_count = '23';
$location_indicatior_links = array(
	array('Official','https://www.scsmi.net/'),
	array('Data','http://www.city-data.com/city/St.-Clair-Shores-Michigan.html'),
	array('Wiki','https://en.wikipedia.org/wiki/St._Clair_Shores,_Michigan'),
	// array('Official','https://www.romi.gov/'),
	// array('Foundation','https://www.royal-oak.org/'),
	// array('Downtown','https://www.downtownroyaloak.org/'),
);

$phone_link = '<a href="tel:+' . $phone_number . '">' . $phone_number . '</a>';
$gmap_search = $site_city . $site_state;
$default_gmap = '<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=' . str_replace(' ', '%20', $gmap_search) . '&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>';

$local_nap_schema = 
	'<div itemscope="" itemtype="http://schema.org/LocalBusiness">
		<div itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
			<img style="display:none;" src="' . $google_card_image_url . '" width="250" itemprop="url">
		</div>
		<span itemprop="name">' . $site_name . '</span><br>
		<link itemprop="url" href="' . $url_for_sitemap . '">
		<span itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
			<span itemprop="addressLocality">' . $site_city . '</span>, <span itemprop="addressRegion">' . $site_state . '</span> 
		</span><br>	
		<a itemprop="telephone" content="' . $phone_number . '" href="tel:+' . $phone_number . '">' . $phone_number . '</a><br>
		<span itemprop="email" style="display:none;">' . $schema_email . '</span>
		<link itemprop="logo" href="' . $logo_url . '">
		<link itemprop="hasMap" href="' . $google_my_business_url . '">
		<span itemprop="geo" itemscope="" itemtype="http://schema.org/GeoCoordinates">
			<meta itemprop="latitude" content="' . $business_latitude . '">
			<meta itemprop="longitude" content="' . $business_longitude . '">
		</span><br>
		<time itemprop="openingHours" datetime="' . $business_hours_nap . '">' . $business_hours . '</time>
	</div>';


$review_schema = '
	<div itemscope itemtype="http://schema.org/AggregateRating">
	    <span itemprop="ratingValue">' . $rating_value . '</span> stars - based on <span itemprop="reviewCount">' . $rating_count . '</span> reviews
	    <div itemprop="itemReviewed" itemscope itemtype="http://schema.org/Product">
	        <!-- Product properties -->
	    </div>
	</div>
';
$review_no_schema = 'Rated ' . $rating_value . ' stars - based on ' . $rating_count . '</span> reviews';



$temp_link;
foreach ($location_indicatior_links as $link => $key) {
	$temp_link .= '<a href="' . $key[1] . '" target="_blank">' . $key[0] . '</a> ';
}
$location_indicatior_links = $temp_link;












//
// dev
//
// $gtag_link = "<script>console.log('analytics go here');</script>";
// $gtag_analytics = '';
// $bing_meta = '';

//
// St. Clair Power Washing
//
$gtag_link = '<meta name="google-site-verification" content="cRx4uIg_MrSR3uRwZkXqOyySrYbc1FjSqd02eHFhfNM" />';
$gtag_analytics = '<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134148876-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "UA-134148876-1");
</script>
';
$bing_meta = '';



// ?>