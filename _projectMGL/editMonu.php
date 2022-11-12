<?php require_once 'includes/cabeceraMonu.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">

    <br />

    <form action="editMonuBuscar.php" method="POST">
        <p>Introduce el ID del Monumento </p>
        <label for="idMonument">id Monumento:</label>
        <input type="idMonument" name="idMonument" placeholder="id Monumento" maxlength="100" />

        <input type="submit" value="Buscar" />
    </form>

    <?php
    if (isset($_SESSION['editMonu'])) {
        echo "Comprobar Correcto";

        $monum = $_SESSION['editMonu'];
    } else {
        $monum['idMonument']        = "";
        $monum['monName']      = "";
        $monum['monLocation']       = "";
        $monum['monDes']     = "";
    }
    ?>
    <form action="editMonuBD.php" method="POST">
        <!--hidden value -->
        <input type="hidden" name="idMonument" value="<?= $monum['idMonument'] ?>">

        <label for="monName">Nombre del Monumento</label>
        <input type="text" name="monName" placeholder="Nombre del Monumento" maxlength="100" value="<?= $monum['monName'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'monName') : ''; ?>


        <label for="monLocation">Localización</label>
        <input type="text" name="monLocation" placeholder="Localización" maxlength="50" value="<?= $monum['monLocation'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'monLocation') : ''; ?>

        <label for="monDes">Descripción</label>
        <input type="text" name="monDes" placeholder="Descripción" maxlength="1000" value="<?= $monum['monDes'] ?>" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'monDes') : ''; ?>



        <input type="submit" value="Actualizar" />
    </form>
    <?php borrarErrores();

    //Borrar datos de sesión de la pestaña edit

    if (isset($_SESSION['editMonu'])) {
        $_SESSION['editMonu'] = null;
    }




    ?>



</div>
<!--fin principal-->