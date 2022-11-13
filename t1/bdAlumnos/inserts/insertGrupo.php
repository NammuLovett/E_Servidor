<?php

include_once("../bdconnect.php");

$name = $_POST['name'];
$course = $_POST['curso'];

$sql = "INSERT INTO Grupo (`nombreGrupo`, `curso`)
VALUES ('$name','$course')";
var_dump($sql);

if ($conn->query($sql) === true) {
    header("location:../listado/listaGrupos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
