<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cantidad = $_GET['cantidad'];
    $suma = 0;
    for ($i = 1; $i <= $cantidad; $i++) {
        $suma += $_GET['N' . $i];
    }
    echo "La suma es $suma";
    ?>

</body>

</html>