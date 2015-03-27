<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Usuarios');
$html->assign('headerContent', 'Configuración Usuario');
$html->assign('headerIconContent', 'fa fa-tasks');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'usuarios.php', 'title' => 'Configuración', 'header' => 'Usuarios'));
$html->assign('optionActive', '1');
$html->assign('jsFile', $baseHTTP . 'files/js/usuarios.js');
//
//mostrar sub header
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('usuarios.html');
