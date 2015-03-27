<?php
	session_start();
        /* Hora Lima */
        date_default_timezone_set('America/Lima');
	/*.:: configuracion ::.*/
	require_once __DIR__.'/../../model/config/config.php';
	$config = new Config(); //reemplazar por ruta del servidor
        $baseHTTP = $config->baseHTTP;
	/*.:: smarty ::.*/
	require_once __DIR__.'/smarty/libs/Smarty.class.php';
	$html= new Smarty;
	$html->assign('imgDir',$baseHTTP.'files/img/');//ruta imagenes
	$html->assign('themeDir',$baseHTTP.'files/dll/theme/');//ruta tema
	$html->assign('defaultJS',$baseHTTP.'files/js/default.js');//ruta js
	$html->assign('defaultCSS',$baseHTTP.'files/css/default.css');//ruta css
	/*.:: sessions ::.*/
	$sessionIdUsuario = $_SESSION["sessionIdUsuario"];
	$sessionUsuario = $_SESSION["sessionUsuario"];
	$sessionIdPerfil = $_SESSION["sessionIdPerfil"];
	$sessionPerfil = $_SESSION["sessionPerfil"];
	$sessionIdPersonal = $_SESSION["sessionIdPersonal"];
	$sessionPersonal = $_SESSION["sessionPersonal"];
	$sessionEmail = $_SESSION["sessionEmail"];
	$sessionIdAcceso = $_SESSION["sessionIdAcceso"]; 
	//
	$html->assign('sessionIdUsuario',$sessionIdUsuario);
	$html->assign('sessionUsuario',$sessionUsuario);
	$html->assign('sessionIdPerfil',$sessionIdPerfil);
	$html->assign('sessionPerfil',$sessionPerfil);
	$html->assign('sessionIdPersonal',$sessionIdPersonal);
	$html->assign('sessionPersonal',$sessionPersonal);
	$html->assign('sessionEmail',$sessionEmail);
	$html->assign('sessionIdAcceso',$sessionIdAcceso);
	/*.:: empresa ::.*/
	$html->assign('companyName','I.S.T.P. Perú Catolica');
	$html->assign('companyRUC','');
	/*.:: software ::.*/
	$html->assign('softwareName','CATONET');
	$html->assign('softwareVersion','Ver 1.5');
	$html->assign('softwareYear','2015');
	