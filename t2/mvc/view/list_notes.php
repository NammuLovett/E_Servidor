<div class='row'>
    <div class="col-md-12 text-right">
        <a href="index.php?action=insert" class="btn btn-outline-primary">✚</a>
        </hr>
    </div>
    <?php
    if (count($dataToView) > 0) {
        foreach ($dataToView as $note) {
    ?>
            <div class="col-md-3">
                <div class="card-body border border-secondary rounded">
                    <h5 class="card-tile"><?php echo $note->titulo; ?></h5>
                    <div class="card-text"><?php echo nl2br($note->contenido); ?></div>
                    <hr class="mt-1" />
                    <a href="index.php?action=edit&id=<?php echo $note->id; ?>" class="btn btn-primary">✏️</a>
                    <a href="index.php?action=confirmDelete&id=<?php echo $note->id; ?>" class="btn btn-outline-danger" onclick="return confirm('¿Seguro que desea eliminar?')">❌ </a>
                </div>
            </div>
        <?php
        }
    } else {
        ?>
        <div class="alert alert-info"> Actualmente hay notas </div>
    <?php
    }
    ?>
</div>
<!-- asd -->