<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->assetsUrl ?>/styles/common-<?= $app->assetsVersion ?>-src.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->assetsUrl ?>/styles/common-<?= $app->assetsVersion ?>.css">

<?php } ?>
