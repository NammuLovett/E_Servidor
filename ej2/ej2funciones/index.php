<?php

include_once "funciones.php";

if (isset($_GET['cantidad'])) {
    $cantidad = $_GET['cantidad'];

    if (isset($_GET['sumar'])) {
        suma($cantidad);
    } else {
        crearFormulario($cantidad);
    }
} else { //primer formulario si no hay datos, recojo cantidad
    echo '<form action="#" method="get">
    <p><label for="variables">Determina cuántas inputs quieres sumar</label>
    <p>  <input type="number" name="cantidad" />
    <input type="submit" name="enviar" value="Enviar" />
</form>';
}
