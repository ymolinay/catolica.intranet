<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Alumnos');
$html->assign('headerContent', 'Mantenimiento de Alumnos');
$html->assign('headerIconContent', 'fa fa-user');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'alumnos.php', 'title' => 'Alumnos', 'header' => 'Mantenimiento'));
$html->assign('optionActive', '4');
$html->assign('jsFile', $baseHTTP . 'files/js/alumnos.js');
//mostrar submenu
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('alumnos.html');
