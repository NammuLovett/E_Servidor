<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include_once('biblioteca.php');
?>

<body>
    <form action="#" method="get">
        <label for="lista1">Operación</label>
        <select name="operacion" id="lista1">
            <option value="" selected disabled hidden>Seleccione una opción</option>
            <option type="select" name="operacion" value="sumar">sumar <br>
            <option type="select" name="operacion" value="restar">restar <br>
            <option type="select" name="operacion" value="multiplicar">multiplicar <br>
            <option type="select" name="operacion" value="dividir">dividir<br>
        </select>

        <p>Introduce dos números</p>
        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="submit" name="enviar" value="Enviar">

    </form>
    <?php
    if (isset($_GET['enviar'])) {
        echo "<p>Resultado:  </p>" . $_GET['operacion']($_GET['num1'], $_GET['num2']);
    }

    ?>

</body>

</html>