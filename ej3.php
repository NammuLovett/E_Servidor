<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
</head>

<body>

    <h1>Ejercicios con tabla</h1>
    <h3>¿Cuántas filas y columnas tendrá la tabla ? </h3>

    <?php
    /*
    
        A partir de un número de filas y columnas, crear una tabla con ese tamaño. Las celdas deben estar rellenadas con los valores de las coordenadas de cada celda. (tabla.php)
    
    
    */

    if (!isset($_GET['cantidad'])) {
    ?>
        <form method="get" action="ej3.php">
            <input type="number" name="cantidad">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php

    } else {
        $cantidad = $_GET['cantidad'];
        echo "<h2>Hay que hacer $cantidad filas y columnas</h2>";
        echo "<table border = '1'>";
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cantidad; $j++) {
                echo "<td>$i,$j</td>";
            }
            "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>