<?php



$sql = "INSERT INTO profesor (id_teacher, nameTeacher, surnameTeacher, tlfTeacher, emailTeacher)
VALUES ('1','john','doe','999212121','user@email.com')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
