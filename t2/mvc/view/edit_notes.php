<div class="update">
    <!-- Formulario que envía por post los nuevos datos de la nota al index con el action update y el id de la nota en cuestión. -->

    <form action="index.php?action=confirmUpdate&id=<?= $dataToView->id ?>" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Título</span>
            <input class="form-control" type="text" name="title" placeholder="Escriba aquí..." value="<?= $dataToView->titulo ?>" required></input>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Texto</span>
            <input class="form-control" name="content" placeholder="Escriba aquí..." value="<?= $dataToView->contenido ?>" required></input>
        </div>
        <input class="btn btn-primary" type="submit" value="Aceptar" />
    </form>


    <a href="index.php"><button class="btn btn-outline-danger">Cancelar</button></a>
</div>