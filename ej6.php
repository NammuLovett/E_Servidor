<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
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

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Ejercicios con tabla de multiplicar</h1>

    <?php
    /*
    Crea un programa que muestre por pantalla un cuadrado exactamente igual (fíjate bien en los encabezados, tanto de las filas como de las columnas) al de la imagen con las tablas de multiplicar.
    */

    const filcol = 11;
    echo "<table border='1'>";

    for ($i = -1; $i < filcol; $i++) {
        echo "<tr>";
        for ($j = -1; $j < filcol; $j++) {
            if ($j == -1 && $i == -1) {
                echo "<th>X</th>";
            } elseif ($j == -1) {
                echo "<td style='background-color: orange; color:azure;'>$i</td>";
            } elseif ($i == -1) {
                echo "<th>$j</th>";
            } else {
                echo "<td>" . ($i) * ($j) . "</td>";
            }
        }
        "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>