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
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "$includesPath/headers/main.php"; ?>
		<?php include "$includesPath/styles/common.php"; ?>
		<?php include "$includesPath/styles/public.php"; ?>
    </head>
	<body>
		<?php include "$includesPath/headers/public.php"; ?>
		<div class="landing-page-container">
			<div class="container container-main">
				<div class="content-wrap content-main-wrap">
					<div class="content">
						Page Not Found
					</div>
				</div>
			</div>
		</div>
        <?php include "$includesPath/footers/public.php"; ?>
        <?php include "$includesPath/footers/main.php"; ?>
        <?php include "$includesPath/scripts/common.php"; ?>
        <?php include "$includesPath/scripts/public.php"; ?>
    </body>
</html>
