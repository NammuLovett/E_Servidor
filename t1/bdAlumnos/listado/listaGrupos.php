<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <!-- charset  unicode, todos los idiomas, emojis... -->
    <meta name="description" content="This is my first webpage ... " />
    <!-- en name pones el nombre del metadato. y en content el metadato: En desctiption es una descripción en lenguaje natural  -->
    <meta name="keywords" content="coding, html, programming" />
    <!-- keywords ayuda a posicionarnos frente a los motores de búsqueda -->
    <meta name="author" content="Manuel Gómez Lora" />
    <!-- Autor de la página web -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Para dar soporte a las versiones antiguas de IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- El conjunto de cosas que se muestra en pantalla, es decir si no se pone, las páginas responsives no se muestran, es la referencia de estas-->
    <meta name="generator" content="Programa" />
    <!-- Si nuestra página web ha sido creada de forma automáticamente con un programa -->
    <link rel="stylesheet" href="../style.css" />
    <!-- Señalar contenido que tiene relación con el html de la web, tienes que poner en rel la palabra cable -->
    <link rel="icon" href="img/favicon.ico" />
    <!-- Favicon de la web -->
    <title>BD MURALLA</title>
</head>

<body>
    <table>
        <tr>
            <th>TABLA GRUPOS</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CURSO </th>
            <th></th>
            <th></th>
        </tr>

        <?php
        include_once('../bdconnect.php');
        $sql = "SELECT * FROM Alumno a JOIN Grupo g ON g.id_grupo = a.id_grupo";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($alumno = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $alumno['id_grupo'] . "</td>";
                echo "<td>" . $alumno['nombreGrupo'] . "</td>";
                echo "<td>" . $alumno['curso'] . "</td>";
                echo "<td><button onclick='update(" . $alumno['id_alumno'] . ", `alumno`)'>Editar</button></td>";
                echo "<td><button onclick='confirmDelete(" . $alumno['id_alumno'] . ", `alumno`)'>Eliminar</button></td>";
                echo "</tr>";
            }
            echo "<a href='../index3.html'><-- ATRÁS</a> ";
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