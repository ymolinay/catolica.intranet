<?php

session_start();
require_once __DIR__ . '/../model/dao/matriculaDAO.php';
require_once __DIR__ . '/../model/dao/matriculaDetalleDAO.php';
require_once __DIR__ . '/../model/dao/gridDAO.php';

$objMatriculaDAO = new MatriculaDAO();
$objMatriculaDetalleDAO = new MatriculaDetalleDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

if ($action == "save") {
    $error = TRUE;
    $idMatricula = $_GET['idMatricula'];
    $Fecha = date('Y-m-d');
    $Hora = date('H:i:s');
    $idUsuarioCarrera = $_GET['idUsuarioCarrera'];
    $idCiclo = $_GET['idCiclo'];
    $idSeccion = $_GET['idSeccion'];
    $idSede = $_GET['idSede'];
    $idEstadoMatricula = 1;
    $Indicador = 1;

    $objMatriculaDAO->objMatricula->setIdMatricula($idMatricula);
    $objMatriculaDAO->objMatricula->setFecha($Fecha);
    $objMatriculaDAO->objMatricula->setHora($Hora);
    $objMatriculaDAO->objMatricula->setIdUsuarioCarrera($idUsuarioCarrera);
    $objMatriculaDAO->objMatricula->setIdCiclo($idCiclo);
    $objMatriculaDAO->objMatricula->setIdSeccion($idSeccion);
    $objMatriculaDAO->objMatricula->setIdSede($idSede);
    $objMatriculaDAO->objMatricula->setIdEstadoMatricula($idEstadoMatricula);
    $objMatriculaDAO->objMatricula->setIndicador($Indicador);

    if ($idMatricula != '') {
        $matricula[0] = TRUE;
    } else {
        $matricula = $objMatriculaDAO->ExecuteSave($objMatriculaDAO->objMatricula);
    }

    if ($matricula[0] !== TRUE) {
        $error = TRUE;
    } else {
        $error = FALSE;
        $objMatriculaDetalleDAO2 = new MatriculaDetalleDAO();
        $objMatriculaDetalleDAO2->objMatriculaDetalle->setIdMatricula($idMatricula);
        $deleteMatriculaDetalle = $objMatriculaDetalleDAO2->UpdateDeleteMatriculaDetalle($objMatriculaDetalleDAO2->objMatriculaDetalle);
        if ($deleteMatriculaDetalle !== TRUE) {
            $result2[0] === FALSE;
        } else {
            foreach ($_GET['_gridCheckBox'] as $key => $val) {
                $objMatriculaDetalleDAO->objMatriculaDetalle->setIdMatricula($idMatricula);
                $objMatriculaDetalleDAO->objMatriculaDetalle->setIdPlanEstudio(base64_decode($val));
                $objMatriculaDetalleDAO->objMatriculaDetalle->setIndicador($Indicador);
                $result2 = $objMatriculaDetalleDAO->ExecuteSave($objMatriculaDetalleDAO->objMatriculaDetalle);
            }
        }

        $error = ($result2[0] === TRUE) ? FALSE : TRUE;
    }
    echo ($error) ? 'fail' : 'success';
}

if ($action == "currentStudents") {
    $error = TRUE;
    $idSeccion = $_GET['idSeccion'];
    $objMatriculaDAO->objMatricula->setIdSeccion($idSeccion);
    $current = $objMatriculaDAO->CurrentStudentsSeccion($objMatriculaDAO->objMatricula);
    $current = array("current" => count($current));
    echo json_encode($current);
}

if ($action == "searchDuplicate") {
    $idCiclo = $_GET['_idCiclo'];
    $idCiclo = (!empty($idCiclo)) ? $idCiclo : FALSE;
    $idUsuarioCarrera = $_GET['_idUsuarioCarrera'];
    $idUsuarioCarrera = (!empty($idUsuarioCarrera)) ? $idUsuarioCarrera : FALSE;
    if ($idCiclo && $idUsuarioCarrera) {
        $estadoMatricula = 1;
        $objMatriculaDAO->objMatricula->setIdCiclo($idCiclo);
        $objMatriculaDAO->objMatricula->setIdUsuarioCarrera($idUsuarioCarrera);
        $objMatriculaDAO->objMatricula->setIdEstadoMatricula($estadoMatricula);
        $duplicateMatricula = $objMatriculaDAO->DuplicateMatricula($objMatriculaDAO->objMatricula);
    } else {
        $duplicateMatricula = FALSE;
    }

    $duplicateMatricula = array('count' => count($duplicateMatricula));
    echo json_encode($duplicateMatricula);
}

if ($action == "findMatricula") {

    $jsonMatricula = array();
    $idMatricula = base64_decode($_GET['_id']);
    $idMatricula = (!empty($idMatricula)) ? $idMatricula : FALSE;
    if ($idMatricula) {
        $objMatriculaDAO->objMatricula->setIdMatricula($idMatricula);
        $jsonMatricula = $objMatriculaDAO->SearchMatriculaID($objMatriculaDAO->objMatricula);
        $jsonMatricula = $jsonMatricula[0];
    } else {
        $jsonMatricula = FALSE;
    }

    echo json_encode($jsonMatricula);
}