<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Pago Matricula');
$html->assign('headerContent', 'Matricula');
$html->assign('headerIconContent', 'fa fa-file');
$html->assign('showSubHeader', 'si');
$html->assign('optionActive', '5');
$html->assign('jsFile', $baseHTTP . 'files/js/fichaInscripcion.js');
$html->assign('subHeader', array('link' => 'pagomatricula.php', 'title' => 'Matriculas', 'header' => 'Pago Matricula'));
//
//mostrar sub header
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('pagoMatricula.html');
