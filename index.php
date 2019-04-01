<?php


// Get URI
$request = $_SERVER['REQUEST_URI'];

// Remove GET Parameters
$request = explode('?', $request);
$request = $request[0];
// Remove trailing slash
$request = rtrim($request, '/');

$canonical_path = $request;

// echo $request;

$url_parts = explode('-',$request);
$is_landing_page = false;
$location_type = 'root';
$location_text = '';

// echo 'Request is: ' . $request . '<br>';

// Check not home
if ( count($url_parts) > 1){

    $state_abbrs = getStateAbbrs();

    // $states = getStatesToSearch();

    // Pull city or state identifying data from url
    $last_url_part = end($url_parts);

    foreach ($state_abbrs as $state_abbr) {
        if ($last_url_part == $state_abbr ){
            $is_landing_page = true;
            $location_type = 'city';
        }
    }

    // check if landing page
    if ( $is_landing_page ) {

        // Build City or state text for landing page
        switch ($location_type) {
            case 'city':
                 // get landing page file name
                $landing_page_name = '';
                if ($is_landing_page) {
                    $lp_templates = glob("views/__landing_pages/*.php");
                    foreach ($lp_templates as $lp_template) {
                        $landing_page = str_replace('views/__landing_pages/', '', $lp_template) ;
                        $landing_page = str_replace('.php', '', $landing_page) ;
                        if (strpos($request, $landing_page) !== false) {
                            $landing_page_name = $landing_page;
                        }
                    }
                }

                // Set route
                $request_path = '/' . $landing_page_name . '-landing_page';

                // get state abbr
                $state_abbr = end($url_parts);
                
                $city = str_replace( ('/' . $landing_page_name), '', $request);
                $city = trim($city, '-');
                $city = explode('-', $city );
                array_pop($city);                 
                $city = implode(' ', $city);


                // set state abbr to uppercase
                $state_abbr = strtoupper($state_abbr);
                $city = ucwords($city);

                // echo $city . ', ' . $state_abbr . '<br>';
                $location_text = $city . ', ' . $state_abbr;
                // die(); 

                break;

            case 'state':
                break;
            
            default:
                # code...
                break;
        }

        $request = $request_path;

    } // if $is_landing_page 

   
} // if




// set location specific text
if (isset($city) && isset($state_abbr)) {
     $location_text = $city . ', ' . $state_abbr;
}

// Grab Config
require_once('config.php');

// Route to correct file based on URI
require_once('routes.php');


// 
// EVERYTHING BELOW THIS IS NOT BEING USED 
// 


function getStateAbbrs(){
    $state_abbrs = array( 'al','ak','az','ar','ca','co','ct','de','fl','ga','hi','id','il','in','ia','ks','ky','la','me','md','ma','mi','mn','ms','mo','mt','ne','nv','nh','nj','nm','ny','nc','nd','oh','ok','or','pa','ri','sc','sd','tn','tx','ut','vt','va','wa','wv','wi','wy');

    return $state_abbrs;
}

function getStates(){
    $states = array('alabama','alaska','arizona','arkansas','california','colorado','connecticut','delaware','florida','georgia','hawaii','idaho','illinois','indiana','iowa','kansas','kentucky','louisiana','maine','maryland','massachusetts','michigan','minnesota','mississippi','missouri','montana','nebraska','nevada','new-hampshire','new-jersey','new-mexico','new-york','north-carolina','north-dakota','ohio','oklahoma','oregon','pennsylvania','rhode-island','south-carolina','south-dakota','tennessee','texas','utah','vermont','virginia','washington','west-virginia','wisconsin','wyoming');
    
    return $states;
}
function getStatesToSearch(){
    $states = array('alabama','alaska','arizona','arkansas','california','colorado','connecticut','delaware','florida','georgia','hawaii','idaho','illinois','indiana','iowa','kansas','kentucky','louisiana','maine','maryland','massachusetts','michigan','minnesota','mississippi','missouri','montana','nebraska','nevada','hampshire','jersey','mexico','york','carolina','dakota','ohio','oklahoma','oregon','pennsylvania','island','carolina','dakota','tennessee','texas','utah','vermont','virginia','washington','virginia','wisconsin','wyoming');

    return $states;
}

// function stateAbbrToFullState($state_abbr){

//     return $state;
// }