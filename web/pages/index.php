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
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "$includesPath/headers/main.php"; ?>
		<?php include "$includesPath/styles/common.php"; ?>
		<?php include "$includesPath/styles/landing.php"; ?>
    </head>
	<body>
		<?php include "$includesPath/headers/landing.php"; ?>
		<div class="landing-page-container">
			<div class="container container-main">
				<div class="content-wrap content-main-wrap">
					<div class="content">
						Hello Basic
					</div>
				</div>
			</div>
		</div>
        <?php include "$includesPath/footers/landing.php"; ?>
        <?php include "$includesPath/footers/main.php"; ?>
        <?php include "$includesPath/scripts/common.php"; ?>
        <?php include "$includesPath/scripts/landing.php"; ?>
    </body>
</html>
