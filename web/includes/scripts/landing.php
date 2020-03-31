<?php if( IS_ENV_DEV ) { ?>

	<script src="<?= $resourcesUrl ?>/scripts/landing.js"></script>

<?php } else { ?>

	<script src="<?= $assetsUrl ?>/scripts/landing-<?= $assetsVersion ?>.js"></script>

<?php } ?>
