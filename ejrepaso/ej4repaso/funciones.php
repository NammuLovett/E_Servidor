<?php

function crearFormulario($cantidad)
{
    echo '<form method="get" action="#">
        <h2>Hay que hacer ' . $cantidad . ' input</h2>
        <input type="hidden" name="cantidad" value="' . $cantidad . '">';

    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }

    echo '</br><input type="submit" name="invertir" value="invertir">        
    </form>';
}

function invertir($val)
{
    for ($i = count($val); $i >= 0; $i--) {

        $aux[] = $val[$i];
    }
    return $aux;
}
