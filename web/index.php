<?php
use cmsgears\core\common\utilities\FileUtility;

// Globals and Config
include __DIR__ . '/includes/globals.php';
include __DIR__ . '/includes/config.php';
include "$includesPath/autoloader.php";

// Router
$uri = $_SERVER[ 'REQUEST_URI' ];

// Clean base route
$uri = str_replace( $baseRoute, '', $uri );
$uri = preg_split( '/\?/', $uri );

// Clean slashes
$route = trim( $uri[ 0 ], '/' );

$script = empty( $route ) ? "$basePath/pages/index.php" : "$basePath/pages/{$route}.php";

$script	= FileUtility::normalizePath( $script );

if( file_exists( $script ) ) {

	include $script;
}
else {

	$script = "$basePath/pages/404.php";

	if( file_exists( $script ) ) {

		include $script;
	}
	else {

		echo "Page not found.";
	}
}
