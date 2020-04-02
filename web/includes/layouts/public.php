<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "{$app->includesPath}/headers/main.php"; ?>
		<?php include "{$app->includesPath}/styles/common.php"; ?>
		<?php include "{$app->includesPath}/styles/public.php"; ?>
    </head>
	<body>
		<?php include "{$app->includesPath}/headers/public.php"; ?>
		<div class="container container-main container-main-public">
			<div class="content-wrap content-main-wrap content-main-wrap-public">
				<div class="content content-public">
					<?= $pageContent ?>
				</div>
			</div>
		</div>
		<?php include "{$app->includesPath}/footers/public.php"; ?>
		<?php include "{$app->includesPath}/footers/main.php"; ?>
		<?php include "{$app->includesPath}/scripts/common.php"; ?>
		<?php include "{$app->includesPath}/scripts/public.php"; ?>
    </body>
</html>
