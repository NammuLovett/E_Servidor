<?php



$sql = "INSERT INTO alumno (nameAlum, surnameAlum, expedient, emailAlum)
VALUES ('john','doe','12345','user@email.com')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
