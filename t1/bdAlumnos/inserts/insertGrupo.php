<?php

include_once("../bdconnect.php");

$name = $_POST['name'];
$course = $_POST['curso'];

$sql = "INSERT INTO grupo (`nombreGrupo`, `curso`)
VALUES ('$name','$course')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaGrupos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
