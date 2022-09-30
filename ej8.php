<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 8</title>
    <style>
        table {
            width: 50%;
            margin: auto;
        }

        td {
            height: 50px;
            width: 50px;
            text-align: center;
        }

        th {
            background-color: blue;
            color: azure;
            height: 50px;
            width: 50px;
            text-align: center;
        }

        h1,
        h2,
        h3 {
            text-align: center;
        }

        input {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <!-- A partir de un formulario con un campo de cantidad de personas, generar un nuevo formulario para leer el nombre, altura y email de cantidad personas.
A partir de las personas introducidas, mostrar sus datos en una tabla, y posteriormente, destacar los datos del más alto y el del más bajo. -->

    <h1>Ejercicios con tabla dinámica</h1>
    <h3>¿Cuántas personas quieres introducir ? </h3>

    <?php
    if ((!isset($_GET['cantidad']))) {
    ?>
        <form method="get" action="#">
            <input type="number" name="cantidad">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    } else {
        $cantidad = $_GET['cantidad'];
        echo "<h3>Hay que hacer $cantidad filas </h3>";
        echo "<table border = '1'>";

        for ($i = -1; $i < $cantidad; $i++) {
            echo "<tr>";
            for ($j = -1; $j < 2; $j++) {
                if ($j == -1 && $i == -1) {
                    echo "<th>Nombre</th>";
                } elseif ($i == -1 && $j == 0) {
                    echo "<th>Email</th>";
                } elseif ($i == -1 && $j == 1) {
                    echo "<th>Altura</th>";
                } elseif ($j == -1) {
                    echo "<td style='background-color:  color:azure;'>$i</td>";
                } elseif ($i == -1) {
                    echo "<th>$j</th>";
                } else {
                    echo "<td>", ($i) * ($j), "</td>";
                }
            }
            "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>

</html>