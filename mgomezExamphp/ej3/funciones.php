<?php


//Para que funcione, debería meter el array bidimensional, y recorrer el valor $i.2
//$i sería el número de concurrencias, y el 2 sería la posición del valor "year".

function ordenar($val) //recibe variable (array en este caso)
{
    for ($j = 0; $j < count($val); $j++) { //bucle doble para recorrer y comprobar el número para cambiar
        for ($i = 0; $i < count($val) - 1; $i++) { //recorre y comprueba hasta el penúltimo valor.

            if ($val[$i] > $val[$i + 1]) { //si el valor de i es mayor que el siguiente valor
                $temp = $val[$i + 1]; //la variable temporal recibe el valor  siguiente
                $val[$i + 1] = $val[$i]; //el valor siguiente recibe el valor de i
                $val[$i] = $temp; //el valor de i recibe el de la variable temporal
            }
        }
    }
    return $val; //devuelve el array
}
