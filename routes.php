<?php 

switch ($request) {
    // Root Pages
    case '/' :
        require __DIR__ . '/views/__root_pages/index.php';
        break;
    case '' :
        require __DIR__ . '/views/__root_pages/index.php';
        break;
    case '/gutter-cleaning' :
        require __DIR__ . '/views/__root_pages/gutter-cleaning.php';
        break;
    case '/roof-cleaning' :
        require __DIR__ . '/views/__root_pages/roof-cleaning.php';
        break;
    case '/commercial' :
        require __DIR__ . '/views/__root_pages/commercial.php';
        break;
    case '/review' :
        require __DIR__ . '/views/__root_pages/review.php';
        break;
    case '/terms-privacy-policy' :
        require __DIR__ . '/views/__root_pages/terms-privacy-policy.php';
        break;
    case '/request-pricing' :
        require __DIR__ . '/views/__root_pages/request-pricing.php';
        break;
    case '/build' :
        require __DIR__ . '/action_sitemap.php';
        break;
    case '/service-locations' :
        require __DIR__ . '/service-locations.php';
        break;


    // Landing Pages
    case '/power-washing-landing_page' :
        require __DIR__ . '/views/__landing_pages/power-washing.php';
        break;


    // Sitemap
    case '/sitemap.xml' :
        require __DIR__ . '/sitemap.xml';
        break;


    // 404 page
    default: 
        require __DIR__ . '/views/__root_pages/404.php';
        break;

}
 ?>