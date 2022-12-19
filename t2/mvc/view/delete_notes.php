<div class="delete">
    <div class="input-group mb-3">

        <p class="form-control"><?= $dataToView->getTitle() ?></p>
        <br />
        <p class="form-control"><?= $dataToView->getContent() ?></p>
    </div>
    <!-- Formulario que envía el action delete con el id de la nota al index. -->
    <form action="index.php?action=delete&id=<?= $dataToView->getId() ?>" method="post">
        <input class="delete" type="submit" value="Eliminar" />
    </form>
    <a href="index.php"><button class="cancel">Cancelar</button></a>

</div>