<?php

include "soporte.php";
include "juego.php";

$miJuego = new Juego("The Last of Us II", 26, 49.99, "PS4", 1, 1);
echo "<strong>" . $miJuego->titulo . "</strong>";
echo "<br>Precio: " . $miJuego->getPrecio() . " euros";
$miJuego->muestraResumen();
