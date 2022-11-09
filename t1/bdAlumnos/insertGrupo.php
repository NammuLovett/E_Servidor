<?php



$sql = "INSERT INTO grupo (id_group, nameCourse, yearCourse)
VALUES ('1','DAW','22/23')";

if ($conn->query($sql) === true) {
    echo "Registro realizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
