<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Registrar Inscripción');
$html->assign('headerContent', 'Inscripción');
$html->assign('headerIconContent', 'fa fa-user');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'generarInscripcionCarrera.php', 'title' => 'ALumno', 'header' => 'Inscripción Carrera'));
$html->assign('optionActive','5');
$html->assign('jsFile',$baseHTTP.'files/js/adjuntarArchivos.js');
//mostrar submenu
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('adjuntarArchivos.html');
