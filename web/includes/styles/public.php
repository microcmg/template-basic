<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $resourcesUrl ?>/styles/public.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $assetsUrl ?>/styles/public-<?= $assetsVersion ?>.css">

<?php } ?>
