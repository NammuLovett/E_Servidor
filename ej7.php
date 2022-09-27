<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border: 1px;

        }


        td {
            height: 50px;
            width: 50px;
            text-align: center;
            border: 1px;
        }

        th {
            background-color: blue;
            color: azure;
            height: 50px;
            width: 50px;
            text-align: center;
            border: 1px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    /*
Mediante un array bidimensional, almacena el nombre, altura y email de 5 personas. Para ello, crea un array de personas, siendo cada persona un array asociativo: [ ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],[…],… ] Posteriormente, recorre el array y muéstralo en una tabla HTML.
*/
    $persona = [
        ['nombre' => 'Aitor', 'altura' => '182', 'email' => 'aitor@correo.com'],
        ['nombre' => 'Paco', 'altura' => '181', 'email' => 'paco@correo.com'],
        ['nombre' => 'Juan', 'altura' => '165', 'email' => 'Juan@correo.com'],
        ['nombre' => 'Santi', 'altura' => '162', 'email' => 'Santi@correo.com'],
        ['nombre' => 'Pedro', 'altura' => '139', 'email' => 'Pedro@correo.com']

    ];
    echo "<table border='1'>
    <tr><th>Nombre</th> <th>altura</th><th>email</th></tr>
    ";
    foreach ($persona as $p) { //Array Amarillo
        echo "<tr>";
        foreach ($p as $k) {  // array lila
            echo "<td>$k</td>";
        }
        echo "</tr>";
    }


    ?>
    </table>
</body>

</html>