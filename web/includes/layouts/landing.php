<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "{$app->includesPath}/headers/main.php"; ?>
		<?php include "{$app->includesPath}/styles/common.php"; ?>
		<?php include "{$app->includesPath}/styles/landing.php"; ?>
    </head>
	<body>
		<?php include "{$app->includesPath}/headers/landing.php"; ?>
		<div class="container container-main container-main-landing">
			<div class="content-wrap content-main-wrap content-main-wrap-landing">
				<div class="content content-landing">
					<?= $pageContent ?>
				</div>
			</div>
		</div>
		<?php include "{$app->includesPath}/footers/landing.php"; ?>
		<?php include "{$app->includesPath}/footers/main.php"; ?>
		<?php include "{$app->includesPath}/scripts/common.php"; ?>
		<?php include "{$app->includesPath}/scripts/landing.php"; ?>
    </body>
</html>
