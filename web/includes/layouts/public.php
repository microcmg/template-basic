<!DOCTYPE html>
<html lang="en-US">
    <head>
		<?php include "$includesPath/headers/main.php"; ?>
		<?php include "$includesPath/styles/common.php"; ?>
		<?php include "$includesPath/styles/public.php"; ?>
    </head>
	<body>
		<?php include "$includesPath/headers/public.php"; ?>
		<?= $pageContent ?>
        <?php include "$includesPath/footers/public.php"; ?>
        <?php include "$includesPath/footers/main.php"; ?>
        <?php include "$includesPath/scripts/common.php"; ?>
        <?php include "$includesPath/scripts/public.php"; ?>
    </body>
</html>
