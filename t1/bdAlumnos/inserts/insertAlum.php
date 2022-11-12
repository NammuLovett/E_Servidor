<?php
include_once("../bdconnect.php");

$id_group = $_POST['id_group'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$expedient = $_POST['expedient'];
$tlfAlum = $_POST['tlfAlum'];
$email = $_POST['email'];



$sql = "INSERT INTO Alumno (`id_grupo`, `nombreA`, `apellidosA`, `expediente`, `telefonoA`, `emailA`)
VALUES ('$id_group', '$name', '$surname', '$expedient', '$tlfAlum', '$email')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaAlum.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
