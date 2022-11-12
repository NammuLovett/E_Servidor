<?php

if (isset($_POST)) {

    require_once 'includes/conexion.php';

    $idMonument   = $_POST['idMonument'];
    $monName      = $_POST['monName'];
    $monLocation  = $_POST['monLocation'];
    $monDes  = $_POST['monDes'];



    $errores = array();

    if (empty($monName) || !preg_match("/[A-Za-z0-9_.]+ /", $monName) || strlen($monName) > 50) {
        $errores['userName'] = 'El campo no es válido';
    }

    if (empty($monLocation) || !preg_match("/[A-Za-z0-9_.]+/", $monLocation) || strlen($monLocation) > 100) {
        $errores['monLocation'] = 'El campo no es válido';
    }


    if (empty($monDes) || !preg_match("/[A-Za-z0-9ÑñÁÉÍÓÚáéíóúÇç_.]+/", $monDes) || strlen($monDes) > 1000) {
        $errores['monDes'] = 'La contraseña no es válida';
    }


    if (count($errores) == 0) {


        $sql = "UPDATE monument SET monName = '$monName', monLocation = '$monLocation', monDes = '$monDes' WHERE idMonument = '$idMonument ';";
        echo $sql;

        $guardar = mysqli_query($db, $sql);
    } else {
        $_SESSION["errores_entradaa"] = $errores;
        var_dump($_SESSION);
    }
    header("Location:listMonu.php");
}
