<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>

<html>
	<?php require_once "blocks/head.php" ?>
<body>
	<?php require_once "blocks/header_top.php" ?>
	<div class="clear"></div>
	
<script src="js/valid.js"></script>

<form action="reg.php" method="post" name="reg_form" class="reg_form" enctype="multipart/form-data">

<div class="form_float">

	<div class="field">
		<label for="name">Имя</label>
		<input type="text" name="name" id="name">
	</div>

	<div class="field">
		<label for="surname">Фамилия</label>
		<input type="text" name="surname" id="surname">
	</div>

	<div class="field">
		<label for="email">E-mail</label>
		<input type="text" name="email" id="email">
	</div>

	<div class="field">
		<label for="password_1">Пароль</label>
		<input type="text" name="password_1" id="password_1">
	</div>

	<div class="field">
		<label for="password_2">Пароль</label>
		<input type="text" name="password_2" id="password_2">
	</div>
	
	<div class="field_fupload">
	<label for="fupload">Выберите автар в формате jpg, gif или png</label>
	<input type="file" name="fupload">
	</div>

</div>
<div class="clear"></div>

<div>
<p class="error_message_p">sdcdcdcf</p>

</div>





<br />
<input type="submit" value="Зарегистрироваться" class="submit_button" onclick="return false">


</form>

	<?php require_once "blocks/footer.php" ?>


</body>

</html>
