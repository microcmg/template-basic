<?php
// Page Variables
$app->title		= "Home | Basic";
$app->desc		= "The home page of basic template.";
$app->keywords	= "Home, Basic";
$canonical		= $app->baseUrl;
$app->pageUrl	= $canonical;

// Page Metas
$app->metas = [
	'title' => $app->title, 'desc' => $app->desc, 'keywords' => $app->keywords, 'robots' => $app->robots,
	'ogTitle' => $app->title, 'ogSite' => $app->siteUrl, 'ogUrl' => $app->pageUrl,
	'ogDesc' => $app->desc, 'ogLocale' => 'en_US',
	'ogType' => 'website', 'ogImage' => "{$app->resourcesUrl}/images/social/site-banner.jpg",
	'ogImageWidth' => 320, 'ogImageHeight' => 180, 'ogImageType' => '2',
	'twCardType' => 'summary_large_image', 'canonical' => $canonical
];

// Sidebar
$sidebar = [ 'parent' => 'home', 'child' => null, 'subChild' => null ];
?>
<?php ob_start(); ?>

<section class="page page-basic">
	<div class="page-content-wrap padding padding-large-v">
		<div class="page-content">
			<h3 class="align align-center padding padding-medium-v">Hello Micro CMSGears !!</h3>
		</div>
	</div>
</section>

<?php
$pageContent = ob_get_contents();

ob_end_clean();

include "{$app->layoutsPath}/landing.php";
