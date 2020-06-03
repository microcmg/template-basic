<?php
// Site & Page Url
$app->siteUrl = 'www.basic.com';
$app->pageUrl = 'https://www.basic.com';

// Base Url
$app->baseUrl = "{$app->protocol}://{$app->hostname}/basic";

// Base Route
$app->baseRoute = '/basic';

// Base Path - Used to refer local files
$app->basePath		= dirname( __DIR__ );
$app->includesPath	= "{$app->basePath}/includes";

// Resource URL & Path - Used to refer the resources
$app->resourcesUrl	= "{$app->baseUrl}/web/resources";
$app->resourcesPath	= "{$app->basePath}/resources";
$app->assetsUrl		= "{$app->baseUrl}/web/assets";
$app->assetsPath	= "{$app->basePath}/assets";

// Layouts & Templates
$app->layoutsPath	= "{$app->includesPath}/layouts";
$app->templatesPath	= "{$app->includesPath}/templates";

// Site
$app->siteName = 'Basic Demo';

// SEO
$app->robots = 'noindex, nofollow';
