<?php
include_once("../bdconnect.php");

$id_prof = $_POST['id'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$tlf = $_POST['tlf'];
$email = $_POST['email'];




$sql = "UPDATE Profesor SET id_profesor = $id_prof, nombreP = '$name', apellidosP = '$surname', telefonoP = '$tlf', emailP = '$email' WHERE id_profesor = $id_prof";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
    header("location:../listado/listaProf.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
