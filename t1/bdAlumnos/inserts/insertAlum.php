<?php
include_once("../bdconnect.php");

$id_group = $_GET['id_group'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$expedient = $_GET['expedient'];
$tlfAlum = $_GET['tlfAlum'];
$email = $_GET['email'];

$sql = "INSERT INTO alumno (id_group, nameAlum, surnameAlum, expedient, tlfAlum, emailAlum) 
VALUES ($id_group,'$name','$surname','$expedient','$tlfAlum','$email')";
$conn->query($sql);


echo "Enviado con éxito";


$conn->close();
