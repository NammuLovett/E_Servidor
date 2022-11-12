<?php
include_once("../bdconnect.php");

$id_teacher = $_GET['id_teacher'];
$nameTeacher = $_GET['nameTeacher'];
$surnameTeacher = $_GET['surnameTeacher'];
$tlfTeacher = $_GET['tlfTeacher'];
$emailTeacher = $_GET['emailTeacher'];

$sql = "INSERT INTO profesor (id_teacher, nameTeacher, surnameTeacher, tlfTeacher, emailTeacher) 
VALUES ($id_group,'$name','$surname','$expedient','$tlfAlum','$email')";
$conn->query($sql);


if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
