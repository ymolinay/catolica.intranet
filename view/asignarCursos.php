<?php

include('../files/dll/includes.php');
$html->assign('titlePage', 'Asignar Cursos');
$html->assign('headerContent', 'Docentes');
$html->assign('headerIconContent', 'fa fa-briefcase');
$html->assign('showSubHeader', 'si');
$html->assign('subHeader', array('link' => 'asignarCursos.php', 'title' => 'Docentes', 'header' => 'Asignar Cursos'));
$html->assign('optionActive','6');
$html->assign('jsFile',$baseHTTP.'files/js/asignarCursos.js');
//mostrar submenu
//$html->assign('subHeader',array('link'=>'configuracion.php','header'=>'Configuración'));
$html->display('asignarCursos.html');
