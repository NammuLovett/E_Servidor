<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:
La columna del máximo debe aparecer en azul.
La fila del mínimo debe aparecer en verde
El resto de números deben aparecer en negro. 

Array Random - 100 & 999 - No se pueden repetir
0 0 0 0 0 0 AZUL
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 N
0 0 0 0 0 0 VERDE
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $numbers = range(100, 999); //Ponemos le rango de números dado por el ejercicio
    shuffle($numbers); // Sacamos al azar los números

    $numbers = array_slice($numbers, 0, 53); // Sacamos un array de 54 números para rellenar el array bidimensional


    print_r($numbers);

    ?>


</body>

</html>