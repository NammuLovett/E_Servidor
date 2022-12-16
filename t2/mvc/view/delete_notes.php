<div class="delete">
    <div class="input-group mb-3">

        <p class="form-control"><?= $dataToView->getTitle() ?></p> <!-- Título de la nota -->
        <hr />
        <p class="form-control"><?= $dataToView->getContent() ?></p> <!-- Contenido de la nota -->
    </div>
    <!-- Formulario que envía el action delete con el id de la nota al index. -->
    <form action="index.php?action=delete&id=<?= $dataToView->getId() ?>" method="post">
        <input class="delete" type="submit" value="Eliminar" /> <!-- Botón de elminar nota -->
    </form>
    <a href="index.php"><button class="cancel">Cancelar</button></a> <!-- Botón de cancelar -->
</div>