<?php if( IS_ENV_DEV ) { ?>

	<script src="<?= $app->resourcesUrl ?>/scripts/landing.js"></script>

<?php } else { ?>

	<script src="<?= $app->assetsUrl ?>/scripts/landing-<?= $app->assetsVersion ?>.js"></script>

<?php } ?>
