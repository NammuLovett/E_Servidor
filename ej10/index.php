<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

    La columna del máximo debe aparecer en azul.
    La fila del mínimo debe aparecer en verde
    El resto de números deben aparecer en negro. -->

<?php

include_once "funciones.php";

$arrayRandom = [];
$arrayRandom = randomGen();

/* var_dump($arrayRandom); */


const FILAS = 6;
const COLUM = 9;

for ($i = 0; $i < COLUM; $i++) {
    for ($j = 0; $j < $FILAS; $j++) {
        $arrBi[$i][$j] = $arrayRandom;
    }
}

var_dump($arrBi);
