<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->resourcesUrl ?>/styles/landing.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->assetsUrl ?>/styles/landing-<?= $app->assetsVersion ?>.css">

<?php } ?>
