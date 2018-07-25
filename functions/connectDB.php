<?php 

$mysqli = false;

function connectDB () {
	
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'crowde_db';

	global $mysqli;
	$mysqli = mysqli_connect($host, $user, $password, $database);
	
	
	
}

function closeDB() {
	global $mysqli;
	$mysqli->close ();
}




?>