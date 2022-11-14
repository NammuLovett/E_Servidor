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
            <th>GRUPO</th>
            <th>PROFESOR</th>
            <th></th>
            <th></th>
        </tr>

        <?php
        include_once('../bdconnect.php');
        $sql = "SELECT * FROM Profesor p JOIN Tutoria t ON p.id_profesor = t.id_profesor JOIN grupo g ON t.id_grupo = g.id_grupo ORDER BY nombreGrupo";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($tuto = $result->fetch_assoc()) {
                $varID =  $tuto['id_grupo'];
                $varProf = $tuto['id_profesor'];
                echo "<tr>";
                echo "<td>" . $tuto['nombreGrupo'] . "</td>";
                echo "<td>" . $tuto['emailP'] . "</td>";

                echo "<td><form action='../forms/formupdateTut.php'>   
                <input type='hidden' name='id_grupo' value='$varID'>
                <input type='hidden' name='idProf' value='$varProf'>
                <input type='submit' value='📝'></input></form></td>";

                echo "<form action='../delete/deleteTut.php'>   
                <input type='hidden' name='idProf' value='$varID'>
                <input type='hidden' value='Eliminar'></input>"
        ?>
                <td><button value="Eliminar" onclick="return confirm('¿Seguro que desea eliminar?')" )> ❌ </button></td>
                </form>
            <?php
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