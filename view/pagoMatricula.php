<?php

include('../files/dll/includes.php');
($sessionIdPerfil == 1 || $sessionIdPerfil == 3) ? '' : header('location:error404.php');
$html->assign('titlePage', 'Pago Matricula');
$html->assign('headerContent', 'Matricula');
$html->assign('headerIconContent', 'fa fa-file');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'pagoMatricula.php', 'title' => 'Matriculas', 'header' => 'Pago Matricula'));
$html->assign('optionActive', '5');
$html->assign('jsFile', $baseHTTP . 'files/js/pagoMatricula.js');
//
//mostrar sub header
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('pagoMatricula.html');
