<?php

include('../files/dll/includes.php');
($sessionIdPerfil == 1 || $sessionIdPerfil == 3) ? '' : header('location:error404.php');
$html->assign('titlePage', 'Tipos de Beneficio');
$html->assign('headerContent', 'Tipos de Beneficio');
$html->assign('headerIconContent', 'fa fa-file');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'tipoBeneficio.php', 'title' => 'Configuración', 'header' => 'Tipos de Beneficio'));
$html->assign('optionActive', '1');
$html->assign('jsFile', $baseHTTP . 'files/js/tipoBeneficio.js');
//
//mostrar sub header
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('tipoBeneficio.html');
