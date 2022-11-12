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
            <th>TABLA TUTORÍA</th>
        </tr>
        <tr>
            <th>PROFESOR</th>
            <th>GRUPO</th>
            <th></th>
            <th></th>
        </tr>

        <?php
        include_once('../bdconnect.php');
        $sql = "SELECT * FROM Profesor p JOIN tutoria t ON p.idProfesor = t.idProfesor JOIN grupo g ON t.id_grupo = g.id_grupo";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($tuto = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $tuto['nombreP'] . "</td>";
                echo "<td>" . $tuto['nombreGrupo'] . "</td>";
                echo "<td><button onclick='update(" . $tuto['id_profesor'] . ", `profesor`)'>Editar</button></td>";
                echo "<td><button onclick='confirmDelete(" . $tuto['id_profesor'] . ", `profesor`)'>Eliminar</button></td>";
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