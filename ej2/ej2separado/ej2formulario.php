<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $cantidad = $_GET['cantidad']; ?>
    <form method="get" action="ej2suma.php">
        <h2>Hay que hacer <?= $cantidad ?> input</h2>
        <?php
        for ($i = 1; $i <= $cantidad; $i++) { //Bucle para generar inputs
            echo "<input type='number' name='N" . $i . "'><br>";
        }
        ?>
        <input type="submit" name="Sumar" value="Sumar">
        <input type="hidden" name="cantidad" value="<?= $cantidad ?>">
    </form>

</body>

</html>