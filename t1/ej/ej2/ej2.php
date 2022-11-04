<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle</title>
</head>

<body>

    <h1>Ejercicios Bucles</h1>

    <?php
    if (isset($_GET['cantidad'])) { //Si la variable cantidad está vacío
        $cantidad = $_GET['cantidad'];
        echo "<h2>Hay que hacer $cantidad input</h2>";
        echo "<form method='get' action='#'>";
        echo "<input type='hidden' name='cantidad' value='$cantidad'>";
        for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
            echo "<input type='number' name='N$i'><br>";
        }
        echo "<input type= 'submit' name='Sumar' value='Sumar'>";
        echo "</form>";
        //Suma
        if (isset($_GET['Sumar'])) {
            $suma = 0;
            for ($j = 1; $j <= $cantidad; $j++) {
                $n = 'N' . $j;
                $suma = $suma + $_GET[$n];
            }
            echo "La suma es $suma";
        }
    } else {
    ?>
        <form method="get" action="#">
            <input type="number" name="cantidad">
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>