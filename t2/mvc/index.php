<?php

require_once 'config/config.php';
require_once 'model/db.php';
require_once 'controllers/note.php';



if (!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");


$controlador = new noteController();

$dataToView = array();
$dataToView = $controlador->{$_GET["action"]()};


/*LOAD views

https://code.tutsplus.com/tutorials/create-a-sticky-note-effect-in-5-easy-steps-with-css3-and-html5--net-13934
*/

require_once 'view/template/header.php';
require_once 'view/' . $controlador->view . '.php';
require_once 'view/template/footer.php';
