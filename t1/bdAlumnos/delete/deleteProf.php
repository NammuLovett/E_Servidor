<?php
include_once  '../bdconnect.php';
$varID = $_GET['idProf'];
//sql to delete a record
$sql = "DELETE FROM Profesor WHERE id_profesor=$varID";

if ($conn->query($sql) === true) {
    header("location:../listado/listaProf.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
