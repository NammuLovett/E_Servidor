<?php
include_once("../bdconnect.php");

$cantidad = $_GET['cantidad'];
for ($i = 0; $i < $cantidad; $i++) {
    $id_group = 1;
    $name = $_GET['name' . $i];
    $surname = $_GET['surname' . $i];
    $expedient = $_GET['expedient' . $i];
    $tlfAlum = $_GET['tlfAlum' . $i];
    $email = $_GET['email' . $i];

    $sql = "INSERT INTO alumno
VALUES (null, $id_group,'$name','$surname',$expedient,'$tlfAlum','$email')";
    $conn->query($sql);
}


echo "Enviado con éxito";


$conn->close();
