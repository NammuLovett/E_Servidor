<?php
include_once("../bdconnect.php");

$id_grupo = $_POST['id'];
$name = $_POST['name'];
$curso = $_POST['curso'];




$sql = "UPDATE Grupo SET id_grupo = $id_grupo, nombreGrupo = '$name', curso = '$curso' WHERE id_grupo = $id_grupo";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaTut.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
