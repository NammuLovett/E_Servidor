<?php
bdConnect();

//sql to delete a record
$sql = "DELETE FROM alumnos WHERE id=";

if ($conn->query($sql) === true) {
    echo "New record created sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
