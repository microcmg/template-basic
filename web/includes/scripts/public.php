<?php if( IS_ENV_DEV ) { ?>

	<script src="<?= $resourcesUrl ?>/scripts/public.js"></script>

<?php } else { ?>

	<script src="<?= $assetsUrl ?>/scripts/public-<?= $assetsVersion ?>.js"></script>

<?php } ?>
