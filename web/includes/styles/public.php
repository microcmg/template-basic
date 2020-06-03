<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->resourcesUrl ?>/styles/public.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $app->assetsUrl ?>/styles/public-<?= $app->assetsVersion ?>.css">

<?php } ?>
