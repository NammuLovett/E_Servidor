<?php

include "cintaVideo.php";
include "dvd.php";
include "juego.php";
include "cliente.php";
include_once 'soporte.php';


//instanciamos un par de obj Cliente
$cliente1 = new Cliente("Bruce Wayne ✏️ ", 23);
$cliente2 = new Cliente("Paco de Lucía", 65);

//Mostramos el número de cada cliente creado
echo "<br> El identificador del cliente 1 es: " . $cliente1->getNumero();
echo "<br> El identificador del cliente 2 es: " . $cliente2->getNumero();

//instanciamos algunos soportes
$soporte1 = new CintaVideo("Los cazamitos", 23, 3.5, 109);
$soporte2 = new Juego("The last Sofa", 23, 49.5, "PS5", 1, 9);
$soporte3 = new Dvd("El milagro de P tinto", 23, 15, "ES-EN", "16:9");
$soporte4 = new Dvd("El imperio contra Paca", 4, 3, "ES,EN", "16:9");

//alquilo algunos soportes
$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente1->alquilar($soporte3);

//voy a intentar alquilar de nuevo un soporte que ya tiene alquilado
$cliente1->alquilar($soporte1);

//El cliente tiene 3 soportes en alquiler como máximo
//Este soporte no lo va a poder alquilar
$cliente1->alquilar($soporte4);
//Este soporte no lo tiene alquilado
$cliente1->devolver(4);
//Devuelvo un soporte que si tengo alquilado
$cliente1->devolver(2);
//Alquilo otro soporte
$cliente1->alquilar($soporte4);
//listo los elemento alquilados
$cliente1->listarAlquileres();
//Este cliente no tiene alquileres
/* $cliente2->devolver(2); */
