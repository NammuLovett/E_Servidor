<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php
    if (!isset($_GET["nombre"]) && !isset($_GET["apellido1"])) {
    ?>
        <form action="formulario.php" method="get">
            <p><label for="nombre">Nombre: </label>
                <input type="text" name="nombre" id="nombre">
            </p>
            <p><label for="apellido1">Primer apellido:</label>
                <input type="text" name="apellido1" id="apellido1">
            </p>
            <p><input type="submit" value="enviar"></p>
        </form>

    <?php
        $nombre = $_GET["nombre"];
        $apellido1 = $_GET["apellido1"];
    } else {
        echo "Hola $nombre $apellido1";
    }

    /*
        Crea un formulario que permita leer una cantidad.
    A partir de cantidad, prepara un formulario con tantas cajas de datos como su valor.
    A partir de los datos de todas las cajas de la página anterior, súmalos y muestra el total.
    */
    ?>



</body>

</html>