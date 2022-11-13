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
    <a href='../index3.html'>

        <-- ATRÁS</a>
            <br>

            <?php
            include_once('../bdconnect.php');
            $idProf = $_GET['idProf'];

            $sql = "SELECT * FROM Profesor WHERE id_profesor = $idProf";
            $result = $conn->query($sql);

            echo "<table>";
            echo "<form action='../update/updateProf.php' method='POST'>";
            if ($result->num_rows > 0) {
                $profesor = $result->fetch_assoc();
                $idProf =  $profesor['id_profesor'];
                $nombre =  $profesor['nombreP'];
                $apellido =  $profesor['apellidosP'];
                $tlf = $profesor['telefonoP'];
                $email = $profesor['emailP'];

            ?>

                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>TLF</th>
                    <th>EMAIL</th>
                </tr>
                <tr>
                    <td><input type='text' value='<?= $idProf ?>' disabled> </input></td>
                    <input type='hidden' name='id' value='<?= $idProf ?>'> </input>
                    <td><input type='text' name='name' value='<?= $nombre ?>'> </input></td>
                    <td><input type='text' name='surname' value='<?= $apellido ?>'> </input></td>
                    <td><input type='text' name='tlf' value='<?= $tlf ?>'> </input></td>
                    <td><input type='text' name='email' value='<?= $email ?>'> </input></td>

                </tr>


                </table>
                <input type="submit" name="insertar" value="Guardar">
                </form>

            <?php
            }

            ?>
</body>

</html>