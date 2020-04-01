<?php
// Page Variables
$title		= "Home | Basic";
$desc		= "The home page.";
$keywords	= "Home";
$canonical	= "$baseUrl/";

// Page Metas
$metas = [
	'title' => $title, 'desc' => $desc, 'keywords' => $keywords, 'robots' => $robots,
	'ogTitle' => $title, 'ogSite' => 'www.microcmg.com',
	'ogUrl' => 'https://www.microcmg.com', 'ogDesc' => $desc, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => "$resourcesUrl/images/social-banner.jpg",
	'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $canonical
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null, 'subChild' => null ];
?>
<?php ob_start(); ?>

<div class="container container-main container-landing">
	<div class="content-wrap content-main-wrap">
		<div class="content padding padding-medium">
			<h1 class="align align-center">Hello Basic</h1>
		</div>
	</div>
</div>

<?php
$pageContent = ob_get_contents();

ob_end_clean();

include "$layoutsPath/landing.php";
