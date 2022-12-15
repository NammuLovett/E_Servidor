<?php

require_once 'config/config.php';
require_once 'model/db.php';
require_once 'controler/note.php';



if (!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");



$controlador = new noteController();

$dataToView = array();
$dataToView = $controlador->{$_GET["action"]}();


require_once 'view/template/header.php';
require_once 'view/' . $controlador->view . '.php';
require_once 'view/template/footer.php';
