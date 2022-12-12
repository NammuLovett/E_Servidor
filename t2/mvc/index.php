<?php

$accion = $GET['action'];
$datos = array();
$cont = new noteControler;
$datos = $cont->getDatos($accion);

require_once 'header.php';
require_once '$cont->vista.php';
require_once 'footer.php';
