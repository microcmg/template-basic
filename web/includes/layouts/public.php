<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "$includesPath/headers/main.php"; ?>
		<?php include "$includesPath/styles/common.php"; ?>
		<?php include "$includesPath/styles/public.php"; ?>
    </head>
	<body>
		<?php include "$includesPath/headers/public.php"; ?>
		<div class="container container-main container-public">
			<div class="content-wrap content-main-wrap">
				<div class="content">
					<?= $pageContent ?>
				</div>
			</div>
		</div>
        <?php include "$includesPath/footers/public.php"; ?>
        <?php include "$includesPath/footers/main.php"; ?>
        <?php include "$includesPath/scripts/common.php"; ?>
        <?php include "$includesPath/scripts/public.php"; ?>
    </body>
</html>
