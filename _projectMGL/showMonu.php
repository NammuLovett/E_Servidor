<?php require_once 'includes/cabeceraMonu.php'; ?>
<?php require_once 'showMonuBD.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
    <?php $varImg = "img/"; ?>

    <br />
    <h3>MOSTRAR MONUMENTO</h3>

    <form action="showMonu.php" method="POST">
        <p>Introduce el ID del Monumento </p><br>
        <label for="idMonument">id Monumento:</label>
        <input type="idMonument" name="idMonument" placeholder="id Monumento" maxlength="100" />
        <input type="submit" name="getMonument" value="Buscar" /><br>
    </form>

    <?php
    if (isset($_SESSION['showMonu'])) {

        echo "Correcto ";
        $monuments = $_SESSION['showMonu'];
    }
    if (isset($_POST['getMonument'])) {

        $idMonument = $_POST['idMonument'];
        $monuments = getMonument($idMonument);
    }


    ?>

    <form action="showMonuBD.php" method="POST">
        <!--hidden value -->
        <input type="hidden" name="idMonument" value="<?= $monuments['idMonument'] ?>">
        <label for="monName">Nombre del Monumento:</label>
        <input readonly type="text" name="monName" placeholder="Nombre del Monumento" maxlength="100" value="<?= $monuments['name'] ?> " />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'monName') : ''; ?>

        <label for="monLocation">Localización</label>
        <input readonly type="text" name="monLocation" placeholder="Localización" maxlength="50" value="<?= $monuments['location'] ?>" />


        <label for="monDes">Descripción</label>
        <input readonly type="text" name="monDes" placeholder="Descripción" maxlength="500" value="<?= $monuments['description'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'monDes') : ''; ?>

        <label for="mapa"> MAPA </label>
        <?php echo $monuments['mapa'] ?>

        <label for="monLocation">Imágenes</label>
        <div>
            <?php
            for ($i = 0; $i < count($monuments["img"]); $i++) {
                echo "<img src='img/" . $monuments['img'][$i] . "' alt=''>";
            }

            ?>
        </div>


    </form>
    <?php borrarErrores();

    //Borrar datos de sesión de la pestaña edit

    if (isset($_SESSION['showMonu'])) {
        $_SESSION['showMonu'] = null;
    }


    ?>



</div>
<!--fin principal-->