<?php
// Host and scheme
$hostname	= $_SERVER[ 'HTTP_HOST' ];
$protocol	= isset( $_SERVER[ 'HTTPS' ] ) ? 'https' : 'http';

// Site & Page Url
$siteUrl = "www.basic.com";
$pageUrl = "https://www.basic.com";

// Base Url
$baseUrl = "{$protocol}://{$hostname}/microsites/basic";

// Base Route
$baseRoute = '/microsites/basic';

// Base Url - Localhost
if( in_array( @$_SERVER[ 'REMOTE_ADDR' ], [ '127.0.0.1', '::1' ] ) ) {

	$baseUrl	= "{$protocol}://{$hostname}/basic";
	$baseRoute	= '/basic';
}

// Base Path - Used to refer local files
$basePath		= dirname( __DIR__ );
$includesPath	= "$basePath/includes";

// Resource URL & Path - Used to refer the resources
$resourcesUrl	= "https://dev.vcdevhub.com/microsites/basic/web/resources";
$resourcesPath	= "$basePath/resources";
$assetsUrl		= "https://dev.vcdevhub.com/microsites/basic/web/assets";
$assetsPath		= "$basePath/assets";

// Layouts & Templates
$layoutsPath	= "$includesPath/layouts";
$templatesPath	= "$includesPath/templates";

// Site
$siteName = 'Basic Demo';

// Assets
$assetsVersion = '20200101';

// SEO
$robots = 'noindex, nofollow';
