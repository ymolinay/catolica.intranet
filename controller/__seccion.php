<?php

session_start();
require_once __DIR__ . '/../model/dao/seccionDAO.php';
require_once __DIR__ . '/../model/dao/usuarioCarreraDAO.php';
require_once __DIR__ . '/../model/dao/gridDAO.php';

$objSeccionDAO = new SeccionDAO();
$objUsuarioCarreraDAO = new UsuarioCarreraDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

//if ($action == "combobox") {
//
//    $cbx = array();
//    $combo = array();
//
//    $idUsuarioCarrera = (!empty($_GET['idUsuarioCarrera'])) ? $_GET['idUsuarioCarrera'] : FALSE;
//    if ($idUsuarioCarrera) {
//        $objUsuarioCarreraDAO->objUsuarioCarrera->setIdUsuarioCarrera($idUsuarioCarrera);
//        $usuarioCarrera = $objUsuarioCarreraDAO->SearchUsuarioCarrera($objUsuarioCarreraDAO->objUsuarioCarrera);
//        $usuarioCarrera = $usuarioCarrera[0];
//
//        $objSeccionDAO->objSeccion->setIdCarrera($usuarioCarrera->idCarrera);
//        $combo = $objSeccionDAO->ExecuteCompleteCombobox($objSeccionDAO->objSeccion);
//    }
//
//    foreach ($combo as $key => $val) {
//        $cbx[$key] = array("idSeccion" => $val->idSeccion, "scnDescripcion" => $val->scnDescripcion, "troDescripcion" => $val->troDescripcion, "scnCantMaxima" => $val->scnCantMaxima, "scnInicio" => $val->scnInicio, "scnFin" => $val->scnFin);
//    }
//    echo json_encode($cbx);
//}

if ($action == "combobox") {
    $cbx = array();
    $combo = array();
    $idCarrera = $_GET['idCarrera'];
    $idTurno = $_GET['idTurno'];
    $idCarrera = (!empty($idCarrera)) ? $idCarrera : FALSE;
    $idTurno = (!empty($idTurno)) ? $idTurno : FALSE;
    if ($idCarrera && $idTurno) {
        $objSeccionDAO->objSeccion->setIdCarrera($idCarrera);
        $objSeccionDAO->objSeccion->setIdTurno($idTurno);
        $combo = $objSeccionDAO->ExecuteCompleteCombobox($objSeccionDAO->objSeccion);
    }
    foreach ($combo as $key => $val) {
        $cbx[$key] = array("idSeccion" => $val->idSeccion, "scnDescripcion" => $val->scnDescripcion, "troDescripcion" => $val->troDescripcion, "scnCantMaxima" => $val->scnCantMaxima, "scnInicio" => $val->scnInicio, "scnFin" => $val->scnFin);
    }
    echo json_encode($cbx);
}

if ($action == 'save') {
    $error = TRUE;

    $idSeccion = $_GET['inputIdSeccion'];
    $descripcon = $_GET['inputDescripcion'];
    $cantMaxima = $_GET['inputCantMaxima'];
    $inicio = explode('-', $_GET['inputInicio']);
    $inicio = $inicio[2] . '-' . $inicio[1] . '-' . $inicio[0];
    $fin = explode('-', $_GET['inputFin']);
    $fin = $fin[2] . '-' . $fin[1] . '-' . $fin[0];
    $anioCreacion = date('Y');
    $idTurno = $_GET['inputTurno'];
    $idCarrera = $_GET['inputCarrera'];
    $indicador = '1';

    $objSeccionDAO->objSeccion->setIdSeccion($idSeccion);
    $objSeccionDAO->objSeccion->setDescripcion($descripcon);
    $objSeccionDAO->objSeccion->setCantMaxima($cantMaxima);
    $objSeccionDAO->objSeccion->setIdTurno($idTurno);
    $objSeccionDAO->objSeccion->setInicio($inicio);
    $objSeccionDAO->objSeccion->setFin($fin);
    $objSeccionDAO->objSeccion->setAnioCreacion($anioCreacion);
    $objSeccionDAO->objSeccion->setIdCarrera($idCarrera);
    $objSeccionDAO->objSeccion->setIndicador($indicador);

    if ($idSeccion != '') {
        $result = $objSeccionDAO->ExecuteUpdate($objSeccionDAO->objSeccion);
    } else {
        $result = $objSeccionDAO->ExecuteSave($objSeccionDAO->objSeccion);
    }

    $error = ($result !== TRUE) ? TRUE : FALSE;

    echo ($error) ? 'fail' : 'success';
}

if ($action == 'searchSeccion') {
    $idSeccion = $_GET['_id'];
    $idSeccion = base64_decode($idSeccion);
    $objSeccionDAO->objSeccion->setIdSeccion($idSeccion);
    $result = $objSeccionDAO->SearchSeccion($objSeccionDAO->objSeccion);
    echo json_encode($result[0]);
}