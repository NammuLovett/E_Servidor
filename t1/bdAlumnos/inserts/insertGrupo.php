<?php

include_once("../bdconnect.php");

$name = $_POST['name'];
$course = $_POST['curso'];

$sql = "INSERT INTO grupo (`nombre`, `curso`)
VALUES ('$name','$course')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
