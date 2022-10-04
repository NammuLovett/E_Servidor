<?php
function crearFormulario($cantidad)
{
    $cantidad = $_GET['cantidad'];
    echo '<form method="get" action="#">
        <h2>Hay que hacer <?= $cantidad ?> input</h2>
        <input type="hidden" name="cantidad" value="$cantidad">';

    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }

    echo '<input type="submit" name="Sumar" value="Sumar">        
    </form>';
}

function  suma($cantidad)
{
    $cantidad = $_GET['cantidad'];
    for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
        echo "<input type='number' name='N" . $i . "'><br>";
    }
}
