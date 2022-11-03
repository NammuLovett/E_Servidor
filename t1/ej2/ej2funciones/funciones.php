<?php
function crearFormulario($cantidad)
{
    echo '<form method="get" action="#">
        <h2>Hay que hacer ' . $cantidad . ' input</h2>
        <input type="hidden" name="cantidad" value="' . $cantidad . '">';

    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }

    echo '<input type="submit" name="sumar" value="sumar">        
    </form>';
}

function  suma($cantidad)
{
    $suma = 0;
    for ($i = 1; $i <= $cantidad; $i++) {
        $suma += $_GET['N' . $i];
    }
    echo "La suma es $suma";
}
