<?php
// -- Environment Setup ---------------------------------- //

$root	= str_replace( '\\', '/', __DIR__ );
$envs	= [ 'dev', 'alpha', 'prod' ];

$envName = null;

echo "Initializing ...\n\n";

if( count( $argv ) > 1 ) {

	$envName = $argv[ 1 ];
}

if( !isset( $envName ) || !in_array( $envName, [ 'dev', 'alpha', 'prod' ] ) ) {

	echo "Enter your development environment among dev, alpha or prod:";

	// Set the required environemnt
	$envName = trim( fgets( STDIN ) );
}

if( !in_array( $envName, $envs ) ) {

	echo "Wrong environment choosen.";

	die();
}

echo "\nCopying assets ...\n\n";

// Copy all files to respective directories
$files = getFileList( "$root/env/{$envName}" );

foreach( $files as $file ) {

	if( !copyFile( $root, "env/{$envName}/$file", "web/$file" ) ) {

		break;
	}
}

// -- Utility Functions ---------------------------------- //

function getFileList( $root, $basePath = '' ) {

	$files	= [];
	$handle = opendir($root);

	while( ( $path = readdir( $handle ) ) !== false ) {

		if ( $path === '.svn' || $path === '.' || $path === '..' ) {

			continue;
		}

		$fullPath		= "$root/$path";
		$relativePath	= $basePath === '' ? $path : "$basePath/$path";

		if ( is_dir( $fullPath ) ) {

			$files = array_merge( $files, getFileList( $fullPath, $relativePath ) );
		}
		else {
			$files[] = $relativePath;
		}
	}

	closedir( $handle );

	return $files;
}

function copyFile( $root, $source, $target ) {

	if ( !is_file( $root . '/' . $source ) ) {

		echo "skip $target ($source not exist)\n";

		return true;
	}

	if ( is_file( $root . '/' . $target ) ) {

		if ( file_get_contents( $root . '/' . $source ) === file_get_contents( $root . '/' . $target ) ) {

			echo "unchanged $target\n";

			return true;
		}

		file_put_contents( $root . '/' . $target, file_get_contents( $root . '/' . $source ) );

		return true;
	}

	echo "generate $target\n";

	@mkdir( dirname( $root . '/' . $target ), 0777, true );

	file_put_contents( $root . '/' . $target, file_get_contents( $root . '/' . $source ) );

	return true;
}
