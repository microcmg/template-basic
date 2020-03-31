<?php if( IS_ENV_DEV ) { ?>

	<script src="<?= $assetsUrl ?>/scripts/common-<?= $assetsVersion ?>-src.js"></script>
	<script src="<?= $resourcesUrl ?>/scripts/apps/core/base.js"></script>
	<script src="<?= $resourcesUrl ?>/scripts/apps/core/controllers/site.js"></script>
	<script src="<?= $resourcesUrl ?>/scripts/main.js"></script>
	<script src="<?= $resourcesUrl ?>/scripts/popups.js"></script>

<?php } else { ?>

	<script src="<?= $assetsUrl ?>/scripts/common-<?= $assetsVersion ?>.js"></script>

<?php } ?>
