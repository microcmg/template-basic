<?php
use cmsgears\core\common\base\Application;

// Globals
include __DIR__ . '/includes/globals.php';

// Autoloader
include __DIR__ . '/includes/autoloader.php';

// Application
$app = new Application();

// Initialise Application
$app->init();

// Config
include __DIR__ . '/includes/config.php';

// App Config
$app->assetsVersion = '20200101';

// Initialise Router
$app->initRouter();

// Render the Page
$app->renderPage();
