<div class="insert">
    <!-- Formulario que envía por post los datos de la nueva nota al index con el action insert -->
    <form action="index.php?action=list&insNotes=true" method="post">

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Título</span>
            <input class="form-control" type="text" name="title" placeholder="Escriba aquí..." required></input>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Texto</span>
            <input class="form-control" name="content" placeholder="Escriba aquí..." required></input>
        </div>


        <input class="btn btn-primary" type="submit" value="Aceptar" />
        <a href="index.php"><button class="btn btn-outline-danger">Cancelar</button></a> <!-- Botón de cancelar -->
    </form>
</div>