<?php
include_once("../bdconnect.php");

$name = $_POST['nameTeacher'];
$surname = $_POST['surnameTeacher'];
$tlfTeacher = $_POST['tlfTeacher'];
$emailTeacher = $_POST['emailTeacher'];


$sql = "INSERT INTO Profesor (`nombre`, `apellidos`, `telefono`, `email`)
VALUES ('$name', '$surname', '$tlfTeacher', '$emailTeacher')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
