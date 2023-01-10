<?php
//Iniciamos sesión para recuperar los datos
session_start();

// Cierra la sesión sin destruir datos
unset($_SESSION['usuario']); // Cerramos la sesión del usuario
header("Location: index.php");
