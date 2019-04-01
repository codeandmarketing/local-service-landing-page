<html lang="en">
<head>
	<meta charset="utf-8">

	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $meta; ?>">

	<!-- Canonical URL -->
	<link rel="canonical" href="<?php echo $url_for_sitemap . $canonical_path; ?>">

	<!-- Mobile Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bing Verification -->
	<?php echo $bing_meta; ?>


	<!--  Essential Sharing META Tags -->
	<meta property="og:title" content="<?php echo $title; ?>">
	<meta property="og:description" content="<?php echo $meta; ?>">
	<!-- <meta property="og:image" content=""> -->
	<meta property="og:url" content="<?php echo $url_for_sitemap . $canonical_path; ?>">
	<meta name="twitter:card" content="summary_large_image">

	<!--  Recommended Sharing Meta Tags -->
	<meta property="og:site_name" content="<?php echo $site_name; ?>">
	<meta name="twitter:image:alt" content="<?php echo $title; ?>">


	<style>
		ol,ul{list-style:none}a,header a{color:var(--color-primary)}@-ms-viewport{width:device-width}a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}h2,h3,hr{margin-top:var(--margin-large)}body,footer{border-top:5px solid var(--color-primary)}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}:root{--padding-small:10px;--margin-small:10px;--padding-large:20px;--margin-large:20px;--padding_container:20px 20px;--padding_element:10px 0;--color-primary:#0078CC;--color-primary-light:#1497ff;--color-secondary:firebrick;--color-gray:#f2f2f2;--color-font:#333;--border-default:2px solid var(--color-gray);--radius-small:.25rem}body{font-size:1.1rem;font-family:sans-serif;line-height:1.5rem;color:var(--color-font);background:#fff}h1,h2,h3,h4,h5,h6{font-weight:700;line-height:1}h1,h2,h3,h4,h5,h6,p{padding:var(--padding_element)}h1{font-size:2rem}h2{font-size:1.5rem}h3{font-size:1.2rem}ol{counter-reset:counter}ol li{counter-increment:counter}ol li::before{content:counter(counter) ". ";font-weight:700}a[href^="tel:+"]{color:var(--color-secondary);font-weight:700}a:hover,strong{color:var(--color-secondary)}img{width:100%;height:auto}em,i{font-style:italic}b,strong{font-weight:700}blockquote{background:var(--color-gray);border-left:10px solid var(--color-primary);padding:.5em 10px;quotes:"\201C""\201D""\2018""\2019";margin-bottom:var(--margin-large)}blockquote:before{color:#ccc}blockquote p{display:inline}input[type=email],input[type=text],select,textarea{width:100%;padding:var(--padding-small);border:var(--border-default);border-radius:var(--radius-small) box-sizing: border-box;resize:vertical;margin-bottom:var(--margin-large);font-size:initial}input[type=submit]{background-color:var(--color-primary);color:#fff;padding:var(--padding-small);border:none;cursor:pointer;font-size:initial}input[type=submit]:hover{background-color:var(--color-primary-light)}.footer_row,.nav_row{background:var(--color-gray)}.wrapper_container{margin:0 auto;max-width:1200px}.flex-grid{display:flex}.col{flex:1;padding:var(--padding_element);padding-left:var(--padding-small)}.col:nth-of-type(1){padding-left:0}.container,.hamburger span,aside,footer,header,main,nav ul li a{padding:var(--padding_container)}.hamburger span,nav ul li{display:inline}.hamburger span,nav ul li a{display:inline-block;text-decoration:none;font-weight:700;color:var(--color-primary)}.hamburger path{fill:var(--color-primary)!important}main{flex:3}aside{flex:1;border-left:var(--border-default)}@media screen and (max-width:767px){.flex-grid{display:block}.col{padding:0}.hide-small{display:none!important}nav ul li,nav ul li a,nav.hamburger span{display:block}nav#primary_nav{display:none}nav ul li{text-align:center}}@media screen and (min-width:768px){.hide-large{display:none!important}nav.hamburger{display:none}}.text-center{text-align:center}.text-left{text-align:left}.text-right,header .phone{text-align:right}.float-left{float:left}.float-right{float:right}.show{display:block!important}.hide{display:none!important}.sticky_item{position:sticky}header{font-size:1.8rem;font-weight:700}header a{text-decoration:none}header .phone a{color:var(--color-secondary)}.nav_row{border-bottom:var(--border-default)}.stars{color:orange}.reviews img{max-width:50px;padding:0 10px 10px}.footer_row{padding-bottom:40px}.mobile_footer_phone{text-decoration:none;font-weight:700;font-size:1.4rem}.click-to-call{position:fixed;bottom:0;width:100%;background:orange;color:#fff}@media screen and (max-width:767px){header .logo,header .phone{text-align:center}header .logo{padding-bottom:var(--padding-small)}}
	</style>
	
</head>

<body>
	<div class="wrapper header_row">
		<div class="wrapper_container">
			<header class=" flex-grid">
				<div class="col logo">
					<span><a href ="<?php echo $url; ?>/"><?php echo $site_name; ?> </a></span>
				</div>
				<div class="col phone">
					Call <?php echo $phone_link; ?>
				</div>
			</header>
		</div>
	</div>
	<div class="wrapper nav_row">
		<div class="wrapper_container">
			<nav class="hamburger">
				<ul>
					<li><span onclick="toggle_nav()"><svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></span></li>
				</ul>
			</nav>
			<nav id="primary_nav">
				<ul>
					<li><a href="/" title="Royal Oak Power Washing">Power Washing</a></li>
					<li><a href="/gutter-cleaning" title="Royal Oak Gutter Cleaning">Gutter Cleaning</a></li>
					<li><a href="/roof-cleaning" title="Roof Cleaning In Royal Oak, MI">Roof Cleaning</a></li>
					<li><a href="/request-pricing" title="Request Pricing">Request Pricing</a></li>
				</ul>
			</nav>	
		</div>	
	</div>

	<!-- Start Main Content  -->
	<div class="wrapper main_row">
		<div class="wrapper_container">
	