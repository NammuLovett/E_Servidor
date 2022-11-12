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
    <form action="../inserts/insertProf.php" method="POST">
        <fieldset>
            <legend>Crear profesor</legend>
            <p>
                <label for="nameTeacher">Nombre </label>
                <input type="text" name="nameTeacher" id="nameTeacher" />
            </p>
            <p>
                <label for="surnameTeacher">Apellidos</label>
                <input type="text" name="surnameTeacher" id="surnameTeacher" />
            </p>
            <p>
                <label for="tlfTeacher">Teléfono</label>
                <input type="text" name="tlfTeacher" id="tlfTeacher" />
            </p>
            <p>
                <label for="emailTeacher"> email</label>
                <input type="text" name="emailTeacher" id="emailTeacher" />
            </p>
            <p>
                <input type="submit" name="insertar" value="Guardar">


            </p>

        </fieldset>
</body>

</html>