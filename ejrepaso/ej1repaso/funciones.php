<?php

function crearFormulario($cantidad)
{
    echo '<form method="get" action="#">
        <h2>Hay que hacer ' . $cantidad . ' input</h2>
        <input type="hidden" name="cantidad" value="' . $cantidad . '">';

    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }

    echo '</br><input type="submit" name="promedio" value="promedio">        
    </form>';
}


function promedio($val)
{
    $promedio = 0;
    for ($i = 0; $i < count($val); $i++) {
        $promedio += $val[$i];
    }
    return $promedio / count($val);
}

/* $val = [2, 4, 5];
echo promedio($val); */
