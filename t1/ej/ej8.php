<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 8</title>
    <style>
        table {
            width: 50%;
            margin: auto;
        }

        td {
            height: 50px;
            width: 50px;
            text-align: center;

        }

        th {
            background-color: navy;
            color: azure;
            height: 50px;
            width: 50px;
            text-align: center;
        }

        h1,
        h2,
        h3 {
            text-align: center;
        }

        input {
            display: block;
            margin-right: auto;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <!-- A partir de un formulario con un campo de cantidad de personas, generar un nuevo formulario para leer el nombre, altura y email de cantidad personas.
A partir de las personas introducidas, mostrar sus datos en una tabla, y posteriormente, destacar los datos del más alto y el del más bajo. -->

    <h1>Ejercicios con tabla dinámica</h1>
    <h3>¿Cuántas personas quieres introducir ? </h3>

    <?php
    if ((empty($_GET['cantidad']))) { // Si está vacío, muestra el formulario
    ?>
        <form method="get" action="#">
            <input type="number" name="cantidad">
            <input type="submit" name="operacion" value="Enviar">
        </form>
    <?php
    } else { //si está relleno el formulario, bucle input con la cantidad 
        $cantidad = $_GET['cantidad'];
        if (!isset($_GET['nombre0'])) { //2 tabla, si el primer valor está vacío muestro la tabla para rellenarlo
            echo "<h3>Hay que hacer $cantidad filas </h3>";
            echo "<form method='get' action='#'>";
            echo "<table border = '1'>";
            echo "<tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Altura</th>
        </tr>";
            echo "<form action='#' method='get'>";
            for ($i = 0; $i < $cantidad; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 3; $j++) {
                    if ($j == 0) {
                        echo "<td><input type='text' name='nombre" . $i . "' placeholder='nombre'></td>";
                    } elseif ($j == 1) {
                        echo "<td><input type='text' name='email" . $i . "' placeholder='email'></td>";
                    } elseif ($j == 2) {
                        echo "<td><input type='text' name='altura" . $i . "' placeholder='altura'></td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table> <br>"; //Cierra tabla gen inputs

            echo "<input type='submit' name='enviar' value='Enviar'>";
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            echo "</form>";

            //Guardar los datos de la tabla en un array
            //--------------------------------------------------------------------------------------------------------------------
        } else { //Si el campo 0,0 está lleno, guarda los datos en el array.
            for ($i = 0; $i < $cantidad; $i++) {
                $arrayPersona[$i] = ['nombre' => $_GET['nombre' . $i], 'email' => $_GET['email' . $i], 'altura' => $_GET['altura' . $i]];
            }
            //Y Mostrar resultados de la tabla
            echo "<table>";
            echo "<tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Altura</th>
            </tr>";

            foreach ($arrayPersona as $individuo) { //Recorre el array pral
                /* echo $individuo['nombre']; 
                echo $individuo['email'];
                echo $individuo['altura']; 
                Esto sería adecuado si sabes exactemente los campos, lo ideal es un foreach dentro de otro para que recorriera el array y el otro array */

                echo "<tr>";

                foreach ($individuo as $dato => $info) { //Recorre el array de dentro (nombre/email/altura) y lo muestra con el dato del campo ($info)
                    // echo $dato; muestra el dato 
                    echo "<td>$info</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }


    ?>
</body>

</html>