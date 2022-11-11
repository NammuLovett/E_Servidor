<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT * FROM alumno a JOIN grupo g ON g.idGrupo = a.idGrupo";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($alumno = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $alumno['idAlumno'] . "</td>";
            echo "<td>" . $alumno['nombreG'] . "</td>";
            echo "<td>" . $alumno['nombreA'] . "</td>";
            echo "<td>" . $alumno['apellido1'] . " " . $alumno['apellido2'] . "</td>";
            echo "<td>" . $alumno['expediente'] . "</td>";
            echo "<td>" . $alumno['telefono'] . "</td>";
            echo "<td>" . $alumno['mail'] . "</td>";
            echo "<td><button onclick='update(" . $alumno['idAlumno'] . ", `alumno`)'>Editar</button></td>";
            echo "<td><button onclick='confirmDelete(" . $alumno['idAlumno'] . ", `alumno`)'>Eliminar</button></td>";
            echo "</tr>";
        }
    } else {
    ?>
        <tr>
            <td colspan="8">No hay resultados</td>
        </tr>
    <?php
    }
    $conn->close();
    ?>
</body>

</html>