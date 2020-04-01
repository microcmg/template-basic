<?php
// Host and scheme
$hostname	= $_SERVER[ 'HTTP_HOST' ];
$protocol	= isset( $_SERVER[ 'HTTPS' ] ) ? 'https' : 'http';

// Base Route
$baseRoute = '/basic';

// Site & Page Url
$siteUrl = "www.basic.com";
$pageUrl = "https://www.basic.com";

// Base Url
$baseUrl = "{$protocol}://{$hostname}/basic";

// Base Path - Used to refer local files
$basePath		= dirname( __DIR__ );
$includesPath	= "$basePath/includes";

// Resource URL & Path - Used to refer the resources
$resourcesUrl	= "{$baseUrl}/web/resources";
$resourcesPath	= "$basePath/resources";
$assetsUrl		= "{$baseUrl}/web/assets";
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
