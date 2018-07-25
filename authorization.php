<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
require_once "functions/connectDB.php";


$email = trim(htmlspecialchars(stripslashes($_POST['email'])));
$password = trim(htmlspecialchars(stripslashes($_POST['password'])));

$sault = md5('GFJ84en8U');

$password_hash_auth = md5($password) . $sault;



connectDB();

$query_user = mysqli_query($mysqli, "SELECT * FROM crowde_reg WHERE email='$email'");
$data = mysqli_fetch_array($query_user, MYSQLI_ASSOC);






if ($data[password] == $password_hash_auth) { //если пароли совпадают
	
	$_SESSION[email] = $data[email];
	$_SESSION[id] = $data[id];
	$_SESSION[name] = $data[name];
	$_SESSION[surname] = $data[surname];
	
	header('Location: index.php');
	
	
	
	
} else {
	echo 'Вы не вошли';
}
	



	
?>