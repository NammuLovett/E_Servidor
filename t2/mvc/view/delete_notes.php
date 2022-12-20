<div class="delete">
    <div class="input-group mb-3">

        <p class="form-control"><?= $dataToView->titulo; ?></p>
        <hr>
        <p class="form-control"><?= $dataToView->contenido; ?></p>
    </div>
    <!-- Formulario que envía el action delete con el id de la nota al index. -->
    <form action="index.php?action=delete&id=<?= $dataToView->id; ?>" method="post">
        <input class="btn btn-outline-danger" type="submit" value="Eliminar" />
    </form>
    <a href="index.php"><button class="btn btn-primary">Cancelar</button></a>

</div>