<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>

<script src="js/form_auth_hidden_valid.js"></script> <!--перенесена из head - конфликтует при подключении на registration -->

<?php require_once "session.php" ?>


<!doctype html>

<html>
	<?php require_once "blocks/head.php" ?>
<body>

	<?php require_once "blocks/form_auth.php" ?>
	<?php require_once "blocks/header.php" ?>
	<?php require_once "blocks/section_two.php" ?>
<div class="clear"></div>
<hr />
	<?php require_once "blocks/section_three.php" ?>
	<?php require_once "blocks/section_four.php" ?>
<div class="clear"></div>
	<?php require_once "blocks/section_five.php" ?>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>