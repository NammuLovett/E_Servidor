<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumnos
    </title>

</head>

<body>
    <form action="../inserts/insertGrupo.php" method="POST">
        <fieldset>
            <legend>Crear grupo</legend>
            <p>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" />
            </p>
            <p>
                <label for="curso">Curso</label>
                <input type="text" name="curso" id="curso" />
            </p>
            <p>

                <input type="submit" name="insertar" value="Guardar">




            </p>
        </fieldset>
</body>

</html>