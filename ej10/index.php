<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

    La columna del máximo debe aparecer en azul.
    La fila del mínimo debe aparecer en verde
    El resto de números deben aparecer en negro. -->

<<?php

    include_once "funciones.php";

    $arrayRandom = randomGen();
    //Creamos una variable con la función que hemos creado.
    /* var_dump($arrayRandom); // Testeo datos*/


    const FILAS = 6;
    const COLUM = 9;
    $k = 0;

    for ($i = 0; $i < FILAS; $i++) {
        for ($j = 0; $j < COLUM; $j++) {
            $arrBi[$i][$j] = $arrayRandom[$k];
            $k++;
        }
    }
    //Se ha creado el array bidimensional   
    var_dump($arrBi);


    $mayor = $num[0];
    $menor = $num[0];
    $columnaMayor = 0;
    $filaMenor = 0;
    $k = 0;

    for ($i = 0; $i < FILAS; $i++) {
        for ($j = 0; $j < COLUMNAS; $j++) {
            $numBi[$i][$j] = $num[$k];
            if ($numBi[$i][$j] < $menor) {
                $menor = $numBi[$i][$j];
                $filaMenor = $i;
            } else if ($numBi[$i][$j] > $mayor) {
                $mayor = $numBi[$i][$j];
                $columnaMayor = $j;
            }
            $k++;
        }
    }

    echo "<table border=1>";
    for ($i = 0; $i < FILAS; $i++) {
        echo "<tr>";
        for ($j = 0; $j < COLUMNAS; $j++) {
            if ($i == $filaMenor && $j == $columnaMayor) {
                echo "<td style='background-color: aquamarine;'>" . $numBi[$i][$j] . "</td>";
            } else if ($j == $columnaMayor) {
                echo "<td style='background-color: green;'>" . $numBi[$i][$j] . "</td>";
            } else if ($i == $filaMenor) {
                echo "<td style='background-color: blue;'>" . $numBi[$i][$j] . "</td>";
            } else {
                echo "<td>" . $numBi[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?> </body>

    </html>