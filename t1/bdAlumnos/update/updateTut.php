<?php
include_once("../bdconnect.php");

$idProf = $_POST['id_profesor'];
$id_grupo = $_POST['id_group'];
$profOri = $_POST['profOriginal'];
$grupOri = $_POST['grupOriginal'];


$sql = "UPDATE Tutoria SET id_grupo = $id_grupo, id_profesor = $idProf WHERE id_grupo = $grupOri AND id_profesor = $profOri";



if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaTut.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
