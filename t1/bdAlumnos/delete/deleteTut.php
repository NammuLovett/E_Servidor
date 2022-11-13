<?php
include_once  '../bdconnect.php';
$varID = $_GET['idProf'];
//sql to delete a record
$sql = "DELETE FROM Tutoria WHERE id_grupo=$varID";

if ($conn->query($sql) === true) {
    header("location:../listado/listaTut.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
