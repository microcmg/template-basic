<?php
// Page Variables
$title		= "Page Not Found | Basic";
$desc		= "Page not found.";
$keywords	= null;
$canonical	= $baseUrl;
$pageUrl	= $baseUrl;

// Page Metas
$metas = [
	'title' => $title, 'desc' => $desc, 'keywords' => $keywords, 'robots' => $robots,
	'ogTitle' => null, 'ogSite' => $siteUrl, 'ogUrl' => null,
	'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null,
	'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $canonical
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null, 'subChild' => null ];
?>
<?php ob_start(); ?>

<h1 class="padding padding-medium align align-center">Page Not Found</h1>

<?php
$pageContent = ob_get_contents();

ob_end_clean();

include "$layoutsPath/landing.php";
