<?php

function crearFormulario($cantidad)
{
    echo '<form method="get" action="#">
        <h2>Hay que hacer ' . $cantidad . ' input</h2>
        <input type="hidden" name="cantidad" value="' . $cantidad . '">';

    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }

    echo '</br><input type="submit" name="ordenar" value="ordenar">        
    </form>';
}


function ordenar($val)
{
    for ($j = 0; $j < count($val); $j++) {
        for ($i = 0; $i < count($val) - 1; $i++) {

            if ($val[$i] > $val[$i + 1]) {
                $temp = $val[$i + 1];
                $val[$i + 1] = $val[$i];
                $val[$i] = $temp;
            }
        }
    }
    return $val;
}
