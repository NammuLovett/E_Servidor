<?php
// Recuperamos la información de la sesión
if (!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
</head>

<body>
    <h1>Te damos la bienvenida <?= $_SESSION['usuario'] ?></h1>
    <p>Para salir pulse <a href="logout.php">aquí</a> </p>
    <p>Volver al <a href="main.php">inicio</a></p>

    <img src="https://images-cdn.newscred.com/Zz04NjA3ZjljMjQ0ODkxMWViOWRjYzU1OGJkNjI1ZjVkZA==" alt="gif">
</body>

</html>