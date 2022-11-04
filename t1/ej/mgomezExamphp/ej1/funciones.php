<?php

function capicua($val) //recibe variable (array en este caso)
{
    $esCapia = true;
    $j = count($val) - 1;

    for ($i = 0; $i < ((count($val) / 2) - 1); $i++) {
        if ($val[$i] != $val[$j]) {
            $esCapia = false;
        }
        $j--;
    }
    return $esCapia;
}

$val = [1, 2, 1];

var_dump(capicua($val));
