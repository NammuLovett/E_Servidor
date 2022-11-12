
<?php

function getMonument($idMonument)
{
    require_once 'includes/conexion.php';
    $db = new mysqli('localhost', "root", "", "monument");



    $sql = "SELECT idMonument, monName, monLocation, monDes, mapa FROM monument WHERE idMonument = $idMonument ;";
    //echo $sql;
    $consulta = $db->query($sql);

    $imagenes = [];
    $contador = 0;

    $sqlImagenes = "SELECT ruta FROM imagen WHERE idMon = $idMonument ;";
    $consultaImagen = $db->query($sqlImagenes);


    while ($imagen = $consultaImagen->fetch_object()) {
        $imagenes[$contador] = $imagen->ruta;
        $contador++;
    }
    $monumento = $consulta->fetch_object();
    $monuments = array(
        "name" => $monumento->monName,
        "location" => $monumento->monLocation,
        "description" => $monumento->monDes,
        "img" => $imagenes,
        "mapa" => $monumento->mapa
    );

    /* } else {
$_SESSION["errores_entrada"] = $errores;
var_dump($_SESSION);
}
*/
    return $monuments;
}
