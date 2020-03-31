<meta charset="UTF-8">
<!-- Use minimum-scale=1.0, maximum-scale=1.0, user-scalable=no for mobile applications -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Page -->
<meta name="description" content="<?= $metas[ 'desc' ] ?>">
<meta name="keywords" content="<?= $metas[ 'keywords' ] ?>">
<meta name="robots" content="<?= $metas[ 'robots' ] ?>">

<!-- Social -->
<meta property="og:title" content="<?= $metas[ 'ogTitle' ] ?>">
<meta property="og:site_name" content="<?= $metas[ 'ogSite' ] ?>">
<meta property="og:url" content="<?= $metas[ 'ogUrl' ] ?>">
<meta property="og:description" content="<?= $metas[ 'ogDesc' ] ?>">
<meta property="og:locale" content="<?= $metas[ 'ogLocale' ] ?>">
<meta property="og:type" content="<?= $metas[ 'ogType' ] ?>">
<meta property="og:image" content="<?= $metas[ 'ogImage' ] ?>">
<meta property="og:image:width" content="<?= $metas[ 'ogImageWidth' ] ?>">
<meta property="og:image:height" content="<?= $metas[ 'ogImageHeight' ] ?>">
<meta property="og:image:type" content="<?= $metas[ 'ogImageType' ] ?>">
<meta name="twitter:card" content="<?= $metas[ 'twCardType' ] ?>">
<link rel="canonical" href="<?= $metas[ 'canonical' ] ?>">

<?php if( IS_ENV_PROD ) { ?>
	<!-- Google Search Console -->
	<meta name="google-site-verification" content="JEeif5r1UHsBUdCL6Zlv5yb4TdHj6q9UVAprXq-_VoQ" />
	<!--bing webmaster -->
	<meta name="msvalidate.01" content="CF73B11BE0476E1B226C5D86A63184E8" />
	<!-- yandex search engine -->
	<meta name="yandex-verification" content="4bd0f44ef63284ae" />
	<!--printrest -->
	<meta name="p:domain_verify" content="79749a5d3c657d0cada43c7a0c9007db"/>
<?php } ?>

<!-- Title -->
<title><?= $metas[ 'title' ] ?></title>

<!-- IE fix for console -->
<script type="text/javascript"> if ( !window.console ) console = { log: function() {} }; </script>

<!-- App Icons -->
<link href="<?= $resourcesUrl ?>/images/icons/favicon.ico" rel="shortcut icon">
<link href="<?= $resourcesUrl ?>/images/icons/apple-icon-precomposed.png" rel="apple-touch-icon-precomposed">

<?php
include "$includesPath/header.php";
include "$includesPath/headers/main/schema.php";
include "$includesPath/headers/main/marketing.php";
