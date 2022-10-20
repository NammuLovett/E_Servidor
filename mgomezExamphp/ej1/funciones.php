<?php

function capicua($val) //recibe variable (array en este caso)
{
    $sizeArray = count($val); //tamaño del array
    $capicua = false;

    if ($sizeArray % 2 == 0) { //Si el array es par

        for ($i = 0; $i < $sizeArray; $i++) {
            if ($i == $sizeArray - $i) { //compara la posición i con el array -$i
                $capicua = true; //si son iguales true y sigue
            } else {
                $capicua = false; //si no son iguales, es false y termina
                break;
            }
        }
    } else { // si es impar
        for ($i = 0; $i < $sizeArray - 1; $i++) {
            if ($i == $sizeArray - $i) {
                $capicua = true;
            } else {
                $capicua = false;
                break;
            }
        }
    }
    return $capicua;
}

$val = [1, 2, 1];

var_dump(capicua($val));
