<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Secciones');
$html->assign('headerContent', 'Configuración de Secciones');
$html->assign('headerIconContent', 'fa fa-wrench');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'seccion.php', 'title' => 'Configuración', 'header' => 'Secciones'));
$html->assign('optionActive', '1');
$html->assign('jsFile', $baseHTTP . 'files/js/seccion.js');
$html->display('seccion.html');
