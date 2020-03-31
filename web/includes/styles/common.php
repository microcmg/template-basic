<?php if( IS_ENV_DEV ) { ?>

	<link rel="stylesheet" type="text/css" href="<?= $assetsUrl ?>/styles/common-<?= $assetsVersion ?>-src.css">

<?php } else { ?>

	<link rel="stylesheet" type="text/css" href="<?= $assetsUrl ?>/styles/common-<?= $assetsVersion ?>.css">

<?php } ?>
