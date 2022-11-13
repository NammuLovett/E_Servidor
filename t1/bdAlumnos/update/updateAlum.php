<?php
include_once("../bdconnect.php");

$id_group = $_POST['id_group'];
$id_alumno = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$expedient = $_POST['expedient'];
$tlfAlum = $_POST['tlfAlum'];
$email = $_POST['email'];




$sql = "UPDATE Alumno SET id_grupo = $id_group, nombreA = '$name', apellidosA = '$surname', expediente = '$expedient', telefonoA = '$tlfAlum', emailA = '$email' WHERE id_alumno = $id_alumno";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaAlum.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
