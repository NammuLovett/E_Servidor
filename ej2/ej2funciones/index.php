<?php

include_once "funciones.php";

if (isset($_GET['cantidad'])) { //Si hay algo en cantidad entra 
    $cantidad = $_GET['cantidad']; //Guardamos la variable fuera para los dos casos de uso

    if (isset($_GET['sumar'])) { //Si hay datos en la variable suma, llama a la función de suma
        suma($cantidad);
    } else { //Si no hay datos en la variable suma, mete los inputs con n cantidad veces
        crearFormulario($cantidad);
    }
} else { // Si no hay nada en la primera pantalla, primer formulario si no hay datos, recojo cantidad
    echo '<form action="#" method="get">
    <p><label for="variables">Determina cuántas inputs quieres sumar</label>
    <p>  <input type="number" name="cantidad" />
    <input type="submit" name="enviar" value="Enviar" />
</form>';
}
