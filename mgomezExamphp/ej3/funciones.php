<?php


//Para que funcione, debería meter el array bidimensional, y recorrer el valor $i.2
//$i sería el número de concurrencias, y el 2 sería la posición del valor "year".

function ordenar($val) //recibe variable (array en este caso)
{
    for ($i = 0; $i < count($val) - 1; $i++) { //bucle doble para recorrer y comprobar el número para cambiar
        for ($j = 0; $j < count($val); $j++) { //recorre y comprueba hasta el penúltimo valor.

            if ($val[$i]['year'] < $val[$j]['year']) { //si el valor de i con 'year' es mayor que el siguiente valor
                $aux = $val[$j]; //la variable temporal recibe el valor  siguiente
                $val[$j] = $val[$i]; //el valor de j recibe el valor i
                $val[$i] = $val[$aux]; //el valor de i recibe el de la variable temporal
            }
        }
    }
    return $val; //devuelve el array
}
