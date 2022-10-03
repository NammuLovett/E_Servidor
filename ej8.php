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
    if ((!isset($_GET['cantidad']))) {
    ?>
        <form method="get" action="#">
            <input type="number" name="cantidad">
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
    } else {
        $cantidad = $_GET['cantidad'];
        echo "<h3>Hay que hacer $cantidad filas </h3>";
        echo "<form method='get' action='#'>";
        echo "<table border = '1'>";
        for ($i = -1; $i < $cantidad; $i++) {
            echo "<tr>";
            for ($j = -1; $j < 2; $j++) {
                if ($j == -1 && $i == -1) { //En la casilla j e i -1 pone nombre
                    echo "<th>Nombre</th>";
                } elseif ($i == -1 && $j == 0) { //En la casilla j 0 e i -1 pone email
                    echo "<th>Email</th>";
                } elseif ($i == -1 && $j == 1) { //En la casilla j -1 e i -1 pone email
                    echo "<th>Altura</th>";
                    //inputs nombre / email / altura
                } elseif ($j == -1) {
                    echo "<td><input type='text' name='nombre.$i' placeholder='nombre'></td>";
                } elseif ($j == 0) {
                    echo "<td><input type='text' name='email.$i' placeholder='email'></td>";
                } elseif ($j == 1) {
                    echo "<td><input type='text' name='altura.$i' placeholder='altura'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table> <br>";
        echo "<input type='submit' name='enviar' value='Enviar'>";
        echo "<input type='hidden' name='cantidad' value='$cantidad'>";
        echo "</form>";


        //--------------------------------------------------------------------------------------------------------------------
        if (isset($_GET['nombre0'])) {
            for ($i = 0; $i < $cantidad; $i++) {
                $arrayPersona[$i] = ['nombre' => $_GET['nombre' . $i], 'email' => $_GET['email' . $i], 'altura' => $_GET['altura.$i']];
            }
            foreach ($arrayPersonas as $individuo) {
                /*   echo $individuo['nombre']; 
                echo $individuo['email'];
                echo $individuo['altura']; 
                Esto sería adecuado si sabes exactemente los campos, lo ideal es un foreach dentro de otro para que recorriera el array y el otro array
                */

                foreach ($individuo as $dato => $info) {
                    echo $dato; //muestra el dato 
                }
            }
        } else {
        ?>
    <?php
        }
    }
    ?>

</body>

</html>