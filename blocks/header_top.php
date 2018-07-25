
<div class="header_top">

	<div class="logo">
		<h1><a href="index.php">CROWDME</a></h1>
	</div>

	<nav>
		<ul>
		<li><a href="#">HOME</a></li>
		<li><a href="#">HOW IT WORKS</a></li>
		<li><a href="#">DISKOVER A PROJEKT</a></li>
		<li><a href="#">BLOG</a></li>
		<li><a href="#">FIND OUT MORE</a></li>
		</ul>
	</nav>

<div class="log_reg">
	<a href="#" class="login">LOGIN</a>
	|
	<a href="registration.php" class="Registration">Registration</a>
</div>

<div class="avatar_info">
<img src="<?php echo 'img/avatars/' . $_SESSION[email] . '/' . 'avatar.jpg' ?>">
<p><?php echo $_SESSION[name] . ' ' . $_SESSION[surname] ?></p>




<a href="#" class="exit_acc" onclick="<?php session_destroy() ?>">Выход</a>




</div>

</div>