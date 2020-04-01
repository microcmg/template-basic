<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "$includesPath/headers/main.php"; ?>
		<?php include "$includesPath/styles/common.php"; ?>
		<?php include "$includesPath/styles/landing.php"; ?>
    </head>
	<body>
		<?php include "$includesPath/headers/landing.php"; ?>
		<div class="container container-main container-landing">
			<div class="content-wrap content-main-wrap">
				<div class="content">
					<?= $pageContent ?>
				</div>
			</div>
		</div>
        <?php include "$includesPath/footers/landing.php"; ?>
        <?php include "$includesPath/footers/main.php"; ?>
        <?php include "$includesPath/scripts/common.php"; ?>
        <?php include "$includesPath/scripts/landing.php"; ?>
    </body>
</html>
