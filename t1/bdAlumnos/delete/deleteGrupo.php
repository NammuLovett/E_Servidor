<?php
include_once  '../bdconnect.php';
$varID = $_GET['idGrupo'];
//sql to delete a record
$sql = "DELETE FROM Grupo WHERE id_grupo=$varID";

if ($conn->query($sql) === true) {
    header("location:../listado/listaGrupos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
