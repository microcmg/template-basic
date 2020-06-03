<?php
// Site & Page Url
$app->siteUrl = 'www.basic.com';
$app->pageUrl = 'https://www.basic.com';

// Base Url
$app->baseUrl = "{$app->protocol}://{$app->hostname}";

// Base Route
$app->baseRoute = '';

// Base Url - Localhost
if( in_array( @$_SERVER[ 'REMOTE_ADDR' ], [ '127.0.0.1', '::1' ] ) ) {

	$app->baseUrl	= "{$app->protocol}://{$app->hostname}/basic";
	$app->baseRoute	= '/basic';
}

// Base Path - Used to refer local files
$app->basePath		= dirname( __DIR__ );
$app->includesPath	= "{$app->basePath}/includes";

// Resource URL & Path - Used to refer the resources
$app->resourcesUrl	= "https://www.basic.com/resources";
$app->resourcesPath	= "{$app->basePath}/resources";
$app->assetsUrl		= "https://www.basic.com/assets";
$app->assetsPath	= "{$app->basePath}/assets";

// Layouts & Templates
$app->layoutsPath	= "{$app->includesPath}/layouts";
$app->templatesPath	= "{$app->includesPath}/templates";

// Site
$app->siteName = 'Basic';

// SEO
$app->robots = 'index,follow';
