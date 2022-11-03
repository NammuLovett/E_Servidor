<?php



bdConnect();

$sql = "INSERT INTO alumnos (name, surname, expedient, email)
VALUES ('john','doe','12345','user@email.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created sucessfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
