<?php
// Host and scheme
$hostname	= $_SERVER[ 'HTTP_HOST' ];
$protocol	= isset( $_SERVER[ 'HTTPS' ] ) ? 'https' : 'http';

// Site Url
$siteUrl = "www.basic.com";

// Base Url
$baseUrl = "{$protocol}://{$hostname}";

// Base Url - Localhost
if( in_array( @$_SERVER[ 'REMOTE_ADDR' ], [ '127.0.0.1', '::1' ] ) ) {

	$baseUrl = "{$protocol}://{$hostname}/basic";
}

// Base Route
$baseRoute = '';

// Base Path - Used to refer local files
$basePath		= dirname( __DIR__ );
$includesPath	= "$basePath/includes";

// Resource URL & Path - Used to refer the resources
$resourcesUrl	= "https://www.basic.com/resources";
$resourcesPath	= "$basePath/resources";
$assetsUrl		= "https://www.basic.com/assets";
$assetsPath		= "$basePath/assets";

// Layouts & Templates
$layoutsPath	= "$includesPath/layouts";
$templatesPath	= "$includesPath/templates";

// Site
$siteName = 'Basic';

// Assets
$assetsVersion = '20200101';

// SEO
$robots = 'index,follow';
