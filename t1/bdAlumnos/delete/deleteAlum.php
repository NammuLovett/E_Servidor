<?php
include_once  '../bdconnect.php';
$varID = $_GET['idAlumn'];
//sql to delete a record
$sql = "DELETE FROM Alumno WHERE id_alumno=$varID";

if ($conn->query($sql) === true) {
    header("location:../listado/listaAlum.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
