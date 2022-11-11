<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ej1</title>
</head>

<body>
    <h3>¿Cuántos alumnos quieres introducir ? </h3>
    <?php
    if (empty($_GET['cantidad'])) { // Si está vacío, muestra el formulario
    ?>
        <form method="get" action="#">
            <input type="number" name="cantidad">
            <input type="submit" name="operacion" value="Enviar">
        </form>
        <?php
    } else { //si está relleno el formulario cantidad, bucle input con la cantidad
        $cantidad = $_GET['cantidad'];
        if (!isset($_GET['name0'])) { // tabla, si el primer valor está vacío muestro la tabla para rellenarlo
            echo "<h3>Hay que hacer $cantidad filas </h3>";
            echo "<form method='get' action='#'>";
            echo "<table border = '1'>";
            echo "<tr>
        <th>nombre</th>
        <th>apellidos</th>
        <th>expediente</th>
        <th>teléfono</th>
        <th>email</th>

        </tr>";
            echo "<form action='#' method='get'>";
            for ($i = 0; $i < $cantidad; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 5; $j++) {
                    if ($j == 0) {
                        echo "<td><input type='text' name='name" . $i . "' placeholder='nombre'></td>";
                    } elseif ($j == 1) {
                        echo "<td><input type='text' name='surname" . $i . "' placeholder='apellidos'></td>";
                    } elseif ($j == 2) {
                        echo "<td><input type='text' name='expedient" . $i . "' placeholder='expediente'></td>";
                    } elseif ($j == 3) {
                        echo "<td><input type='text' name='tlfAlum" . $i . "' placeholder='teléfono'></td>";
                    } elseif ($j == 4) {
                        echo "<td><input type='text' name='email" . $i . "' placeholder='email'></td>";
                    }
                }
                echo "</tr>"; //cierra fila
            }
            echo "</table> <br>"; //Cierra tabla gen inputs

            echo "<input type='submit' name='enviar' value='Enviar'>";
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            echo "</form>";

            //Guardar los datos de la tabla en un array
            //-----------------------------------
        } else { //Si el campo 0,0 está lleno, guarda los datos en el array.
            for ($i = 0; $i < $cantidad; $i++) {
                $arrayAlumni[$i] = [
                    'name' => $_GET['name' . $i],
                    'surname' => $_GET['surname' . $i],
                    'expedient' => $_GET['expedient' . $i],
                    'tlfAlum' => $_GET['tlfAlum' . $i],
                    'email' => $_GET['email' . $i]
                ];
            }
            //Y Mostrar resultados de la tabla
            echo "<table>";
            echo "<tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>expediente</th>
            <th>teléfono</th>
            <th>email</th>
            </tr>";

            echo "<form action='../inserts/insertAlum.php'>";
            $x = 0;
            foreach ($arrayAlumni as $alumni) { //Recorre el array pral
                /*foreach dentro de otro para que recorriera el array y el otro array */

                echo "<tr>";

                foreach ($alumni as $dato => $info) {
                    //Recorre el array de dentro y lo muestra con el dato del campo ($info)
                    echo "<td>$info</td>"; // echo $dato; muestra el dato
        ?>
                    <input type="hidden" name="<?= $dato . $x ?>" value="<?= $info ?>">
    <?php

                }
                $x++;
                echo "</tr>";
            }
            echo "</table>";
            echo "<input type='hidden' name='cantidad' value='$cantidad'>";
            echo "<input type='submit' name='submit' value='Enviar info'>";
            echo "</form>";
        }
    }


    ?>

</body>

</html>