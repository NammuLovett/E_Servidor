<?php

include_once("../bdconnect.php");

$idGrupo = $_POST['id_grupo'];
$idProf = $_POST['id_profesor'];

$sql = "INSERT INTO Tutoria (`id_grupo`, `id_profesor`)
VALUES ('$idGrupo','$idProf')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
