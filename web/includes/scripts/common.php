<?php if( IS_ENV_DEV ) { ?>

	<script src="<?= $app->assetsUrl ?>/scripts/common-<?= $app->assetsVersion ?>-src.js"></script>
	<!--
	<script src="<?= $app->resourcesUrl ?>/scripts/apps/core/base.js"></script>
	<script src="<?= $app->resourcesUrl ?>/scripts/apps/core/controllers/site.js"></script>
	-->
	<script src="<?= $app->resourcesUrl ?>/scripts/main.js"></script>
	<script src="<?= $app->resourcesUrl ?>/scripts/popups.js"></script>

<?php } else { ?>

	<script src="<?= $app->assetsUrl ?>/scripts/common-<?= $app->assetsVersion ?>.js"></script>

<?php } ?>
