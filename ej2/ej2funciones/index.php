<?php

include_once "funciones.php";

if (isset($_GET['cantidad'])) {
    suma($cantidad);
} elseif (isset($_GET['cantidad'])) {
    crearFormulario($cantidad);
} else {
    echo '<form action="#" method="get">
    <p><label for="variables">Determina cuántas variables quieres sumar</label>
    <p>  <input type="number" name="cantidad" />
    <input type="submit" name="enviar" value="Enviar" />
</form>';
}
