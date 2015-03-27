<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Cursos');
$html->assign('headerContent', 'Configuración de Cursos');
$html->assign('headerIconContent', 'fa fa-tasks');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'cursos.php', 'title' => 'Configuración', 'header' => 'Cursos'));
$html->assign('optionActive', '1');
$html->assign('jsFile', $baseHTTP . 'files/js/cursos.js');
//
//mostrar sub header
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('cursos.html');
