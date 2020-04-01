<?php
// Page Variables
$title		= "Page Not Found | Basic";
$desc		= "Page not found.";
$keywords	= null;
$canonical	= "$baseUrl/";

// Page Metas
$metas = [
	'title' => $title, 'desc' => $desc, 'keywords' => $keywords, 'robots' => $robots,
	'ogTitle' => null, 'ogSite' => null, 'ogUrl' => null, 'ogDesc' => null, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => null, 'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $canonical
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null, 'subChild' => null ];
?>
<?php ob_start(); ?>

<div class="container container-main container-public">
	<div class="content-wrap content-main-wrap">
		<div class="content padding padding-medium">
			<h1 class="align align-center">Page Not Found</h1>
		</div>
	</div>
</div>

<?php
$pageContent = ob_get_contents();

ob_end_clean();

include "$layoutsPath/landing.php";
