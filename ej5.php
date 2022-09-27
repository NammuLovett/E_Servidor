<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <style>
        table {
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>

    <h1>Ejercicios con tabla</h1>
    <h3>¿Cuántas filas y columnas tendrá la tabla ? </h3>

    <?php
    /*
    
    Basándote en el ejercicio anterior, ahora sólo debe aparecer el contenido de los dos diagonales.(equis.php)
    
    
    */

    if (!isset($_GET['cantidad'])) {
    ?>
        <form method="get" action="#">
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
                if ($i == $j || $i + $j == $cantidad - 1) {
                    echo "<td>X</td>";
                } else {
                    echo "<td></td>";
                }
            }
            "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>