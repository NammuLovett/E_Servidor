<?php

include "soporte.php";
include "dvd.php";

$miDvd = new Dvd("origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $miDvd->titulo . "</strong>";
echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
$miDvd->muestraResumen();
