<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

    La columna del máximo debe aparecer en azul.
    La fila del mínimo debe aparecer en verde
    El resto de números deben aparecer en negro. -->

<?php

include_once "funciones.php";

print_r(randomGen());
/* 
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
} */
