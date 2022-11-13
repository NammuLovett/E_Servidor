<?php

$servername = "Localhost";
$username = "root";
$password = "root";
$dbname = "monument";


try {
	$conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
	header("location: error.php");
}


// Iniciar la sesión
if (!isset($_SESSION)) {
	session_start();
}
