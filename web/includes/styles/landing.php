<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $resourcesUrl ?>/styles/landing.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $assetsUrl ?>/styles/landing-<?= $assetsVersion ?>.css">

<?php } ?>
