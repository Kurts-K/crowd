<?php
header('Content-Type: text/html; charset=utf-8');
 //все работает, берет данные из регистрации и записывает в базу
header('Location: index.php');

require_once "blocks/head.php"; //utf-8
require_once "functions/connectDB.php";


connectDB();

//аватар


$file_name = $_FILES['fupload']['name'];
$file_type = $_FILES['fupload']['type'];
$file_tmp_name = $_FILES['fupload']['tmp_name'];
$file_error = $_FILES['fupload']['error'];
$file_size = $_FILES['fupload']['size'];





$name = trim(htmlspecialchars(stripslashes($_POST['name']))); 
$surname = trim(htmlspecialchars(stripslashes($_POST['surname'])));
$email = trim(htmlspecialchars(stripslashes($_POST['email'])));
$password = trim(htmlspecialchars(stripslashes($_POST['password_2']))); //Беру пароль с формы и нормализую

echo $name;
echo '-0-0-0-';
echo $surname;




mkdir("img/avatars/" . "$email");

$avatar = (strlen($file_name) > 0 ) ? "img/avatars" . $file_name : "img/avatars/no-avatar.jpg";

$file_name = explode(".", $file_name);
$extension = $file_name[1];

move_uploaded_file($file_tmp_name, 'img/avatars/' . $email . '/' . 'avatar' . '.' . $extension);







$sault = md5('GFJ84en8U');
$password_hash_reg = md5($password) . $sault; //хэширую пароль

//проверка на существование
$query_user = mysqli_query($mysqli, "SELECT * FROM crowde_reg WHERE email='$email'");
$data = mysqli_fetch_array($query_user);



if ($data[email] == $email) {
	echo 'Пользователь существование';
} else {

$success = $mysqli->query ("INSERT INTO `crowde_reg` (`id`, `name`, `supname`, `email`, `password`, `avatar`) VALUES (NULL, '$name', '$surname', '$email', '$password_hash_reg', '$avatar')"); //пишу в базу хэшированный пароль

}


$mysqli-> close();


exit;
 
 
 
 



?>