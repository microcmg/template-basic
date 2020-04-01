<?php
// Page Variables
$title		= "Home | Basic";
$desc		= "The home page.";
$keywords	= "Home";
$canonical	= $baseUrl;
$pageUrl	= $baseUrl;

// Page Metas
$metas = [
	'title' => $title, 'desc' => $desc, 'keywords' => $keywords, 'robots' => $robots,
	'ogTitle' => $title, 'ogSite' => $siteUrl, 'ogUrl' => $pageUrl,
	'ogDesc' => $desc, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => "$resourcesUrl/images/social-banner.jpg",
	'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $canonical
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null, 'subChild' => null ];
?>
<?php ob_start(); ?>

<h1 class="padding padding-medium align align-center">Hello Basic</h1>

<?php
$pageContent = ob_get_contents();

ob_end_clean();

include "$layoutsPath/landing.php";
