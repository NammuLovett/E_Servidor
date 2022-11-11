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
    <form action="../inserts/insertGrupo.php" method="GET">
        <fieldset>
            <legend>Información de los Alumnos</legend>
            <p>
                <label for="name">ID GRUPO </label>
                <input type="text" name="name" id="name" />

                <label for="surname">Nombre del grupo</label>
                <input type="text" name="surname" id="surname" />

                <label for="expedient">Curso</label>
                <input type="text" name="expedient" id="expedient" />


                <input type="submit" name="insertar" value="Guardar">




            </p>
        </fieldset>
</body>

</html>