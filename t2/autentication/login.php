<?php
// Se comprueba la autenticación del usuario
if (isset($_POST['enviar'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];

    // validación de parámetros
    if (empty($usuario) || empty($password)) {
        $error = "Los campos usuario y contraseña no pueden estar vacíos";
        include_once "index.php";
    } else {
        if ($usuario == "admin" && $password == "admin") {
            // se almacena el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            // carga la página principal
            include_once "main.php";
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $error = "Por favor introduce un nombre usuario y contraseña válidos";
            include_once "index.php";
        }
    }
}
