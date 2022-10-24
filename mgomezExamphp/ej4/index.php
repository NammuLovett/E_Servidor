<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de numeros aleatorios</title>
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
    <?php
    const FILAS = 5; //dimensiones
    const COLUMNAS = 8;
    for ($i = 0; $i < FILAS * COLUMNAS; $i++) { //bucle para generar random number en 1 array
        $num[$i] = rand(100, 999); //genera número saleatorios del 100-999
        for ($j = 0; $j < $i; $j++) { //bucle para recorrer las recurrencias
            while ($num[$i] == $num[$j]) { //bucle para comprobar que no se repite y genera de nuevo
                $num[$i] = rand(100, 999);
                $j = 0; //resetea la j para que empiece a comprobar desde el principio
            }
        }
    }
    $k = 0;

    for ($i = 0; $i < FILAS; $i++) { //bucle doble para rellenar el array bidimensional
        for ($j = 0; $j < COLUMNAS; $j++) {
            $numBi[$i][$j] = $num[$k];
            $k++; //Constante para que no se repitan las concurrencias
        }
    }

    echo "<table border=1>"; //bucle doble para mostrar por pantalla el array bidimensional
    for ($i = 0; $i < FILAS; $i++) {
        echo "<tr>";
        for ($j = 0; $j < COLUMNAS; $j++) {
            echo "<td>" . $numBi[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>