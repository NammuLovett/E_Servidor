<?php
include_once("../bdconnect.php");

$id_group = $_POST['id_group'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$expedient = $_POST['expedient'];
$tlfAlum = $_POST['tlfAlum'];
$email = $_POST['email'];



$sql = "INSERT INTO Alumno (`id_grupo`, `nombre`, `apellidos`, `expediente`, `telefono`, `email`)
VALUES ('$id_group', '$name', '$surname', '$expedient', '$tlfAlum', '$email')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
