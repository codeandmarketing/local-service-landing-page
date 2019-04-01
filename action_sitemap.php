<?php 
require_once('config.php');

// add trailing slash to root domain only
$url_for_sitemap .= '/';

$url = $url_for_sitemap;


// clean sitemap folder
if (file_exists('sitemaps')) {
    recursiveRemove('sitemaps/');
}
mkdir('sitemaps');

// create root pages sitemap
createRootPagesSitemap($url); 

// create city/state landing page sitemaps
createCityStateSitemap($url);

// create directory sitemap
createDirectorySitemap($url);





// // Generate root sitemap and link others
	// $sitemaps = glob("dist/sitemaps/*.xml");
	// generateRootSitemap($sitemaps, 'sitemap', $url);
















function createRootPagesSitemap($url){

	//Get root pages
	$pages = glob("views/__root_pages/*.php");
	// remove index.php
	foreach($pages as $key => $one) {
	    if(strpos($one, 'views/__root_pages/index.php') !== false
			|| strpos($one, 'views/__root_pages/404.php') !== false ){
	        unset($pages[$key]);
	    }else{
	    	$pages[$key] = str_replace('views/__root_pages/', $url, $pages[$key]);
			$pages[$key] = str_replace('.php', '', $pages[$key]);
	    }
	}

	// add homepage to root pages
	$url_no_slash = str_replace('/', '', $url);
	array_unshift($pages , $url_no_slash);
	// Create root sitemap
	generateSitemap($pages, 'sitemaps/-root', $url);
	
	return false;
} 

function createCityStateSitemap($url){

	//Get landing page templates
	$lp_templates = glob("views/__landing_pages/*.php");

	foreach ($lp_templates as $lp_template) {
		
		// create sitemap name
		$sitemap_name = str_replace('views/__landing_pages/', '', $lp_template);
		$sitemap_name = str_replace('.php', '', $sitemap_name);
		$sitemap_name = 'sitemaps/' . $sitemap_name;

		// remove path and .php replace path with url
		$lp_template = str_replace('views/__landing_pages/', $url, $lp_template);
		$lp_template = str_replace('.php', '', $lp_template);
		
		$lp_pages = array();


		//grab all locations from csv
		$locations = fopen('data/uscities.csv', 'r');
		while (($line = fgetcsv($locations)) !== FALSE) {
			
			$city = strtolower($line[0]);
			$city = str_replace(' ', '-', $city);
			$county = $line[5];
			$state_abbr = strtolower($line[2]);
			$state = $line[3];
			$zip_codes = $line[14];

			$cur_landing_page = $lp_template . '-' . $city . '-' . $state_abbr;

			// echo $cur_landing_page . '<br>';
			if ($county == 'Macomb' && $state == 'Michigan'
				|| $county == 'St. Clair' && $state == 'Michigan'
				|| $county == 'Oakland' && $state == 'Michigan'
				|| $county == 'Oakland' && $city != 'saint clair shores' && $state == 'Michigan'
				) {
				array_push($lp_pages, $cur_landing_page);

			}
			

		} //while
		fclose($locations);

		$zip_codes_serviced = implode(',',array_unique(explode(',', $zip_codes_serviced)));

		generateSitemap($lp_pages, $sitemap_name, $url);
		generateServiceLocations($lp_pages, $sitemap_name, $url);
	} // foreach


	return false;
}


function createDirectorySitemap($url){

	$all_sitemaps = glob("sitemaps/*.xml");
	$sitemap_name = 'sitemap';

	generateRootSitemap($all_sitemaps, $sitemap_name, $url);

	return false;
}







// 
// Functions that get called within functions
// 

// create sitemap based off array
function generateSitemap($pages, $sitemap_name, $url){
	$sitemap = fopen($sitemap_name . '.xml', "w") or die("Unable to open file!");

	$txt = '<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	foreach ($pages as $page) {
		$html_txt_title = str_replace($url, '', $page);
		$html_txt_title = str_replace('-', ' ', $html_txt_title);
		$html_txt .= '<a href="' . $page . '">' . $html_txt_title . '</a><br>';
		$txt .= '
		<url>
			<loc>' . $page . '</loc>
			' . 
			'<lastmod>' . date('c',time()) . '</lastmod>
			' . 
			'<changefreq>monthly</changefreq>
			' .
		'</url>';
	}
	$txt .= '
	</urlset>';

	fwrite($sitemap, $txt);
	fclose($sitemap);

}

function generateServiceLocations($pages, $sitemap_name, $url){




	$sitemap_html = fopen('service-locations' . '.php', "w") or die("Unable to open file!");

	$html_start = '<?php
	$title = "$site_name - Service Locations";
	$meta = "All Service Locations $site_name";
	require_once("./views/template_parts/includes/header.php");
	?>
	<div id="content" class=" flex-grid">
		<main>
	';

	foreach ($pages as $page) {
		$html_txt_title = str_replace($url, '', $page);
		$html_txt_title = str_replace('-', ' ', $html_txt_title);
		$html_txt .= '<a href="' . $page . '">' . $html_txt_title . '</a><br>';
	
	}

	$html_end = '
		</main>
		<aside>
		</aside>
	</div>

	<?php require_once("./views/template_parts/includes/footer.php");?>';

	$html_txt = $html_start . $html_txt . $html_end;

	fwrite($sitemap_html, $html_txt);
	fclose($sitemap_html);
}


// Link sitemaps
function generateRootSitemap($sitemap_links, $sitemap_name, $url){
	$sitemap = fopen($sitemap_name . '.xml', "w") or die("Unable to open file!");

	$xml_txt = '<?xml version="1.0" encoding="UTF-8"?>
	<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	foreach ($sitemap_links as $sitemap_link) {
		$cur_sitemap_link = str_replace('dist', $url, $sitemap_link);
		$xml_txt .= '
		<sitemap>
			<loc>' . $url . $cur_sitemap_link . '</loc>
			' . 
			'<lastmod>' . date('c',time()) . '</lastmod>
			' . 
			// '<changefreq>monthly</changefreq>
			// ' .
		'</sitemap>';
	}
	$xml_txt .= '
	</sitemapindex>';

	fwrite($sitemap, $xml_txt);
	fclose($sitemap);

}


function recursiveCopy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recursiveCopy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

// remove
function recursiveRemove($dir) {
    $it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
	$files = new RecursiveIteratorIterator($it,
	             RecursiveIteratorIterator::CHILD_FIRST);
	foreach($files as $file) {
	    if ($file->isDir()){
	        rmdir($file->getRealPath());
	    } else {
	        unlink($file->getRealPath());
	    }
	}
	rmdir($dir);
}

?>