<?php

session_start();
require_once __DIR__ . '/../model/dao/planEstudioDAO.php';
require_once __DIR__ . '/../model/dao/gridDAO.php';

$objPlanEstudioDAO = new PlanEstudioDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

if ($action == 'searchAll') {
    $idCarrera = $_GET['idCarrera'];
    $jsonPlanEstudio = new stdClass();
    $objPlanEstudioDAO->objPlanEstudio->setIdCarrera($idCarrera);
    $planEstudio = $objPlanEstudioDAO->GeneratePlanEstudio($objPlanEstudioDAO->objPlanEstudio);

    $jsonPlanEstudio->idCarrera = $planEstudio[0]->idCarrera;
    $jsonPlanEstudio->carDescripcion = $planEstudio[0]->carDescripcion;
    $jsonPlanEstudio->carPeriodos = $planEstudio[0]->carPeriodos;
    $jsonPlanEstudio->cursos = array();
    foreach ($planEstudio as $key => $val) {
        $jsonPlanEstudio->cursos[] = array("idCurso" => $val->idCurso, "crsNombre" => $val->crsNombre, "idCiclo" => $val->idCiclo, "cloDescripcion" => $val->cloDescripcion);
    }
    echo json_encode($jsonPlanEstudio);
}

if ($action == "comboboxAsignarCursos") {
    $cbx = false;
    $combo = array();
    $idCarrera = $_GET['_idCarrera'];
    $idCiclo = $_GET['_idCiclo'];
    $indicador = '1';

    $idCarrera = (!empty($idCarrera)) ? $idCarrera : FALSE;
    $idCiclo = (!empty($idCiclo)) ? $idCiclo : FALSE;

    if ($idCarrera && $idCiclo) {
        $objPlanEstudioDAO->objPlanEstudio->setIdCarrera($idCarrera);
        $objPlanEstudioDAO->objPlanEstudio->setIdCiclo($idCiclo);
        $objPlanEstudioDAO->objPlanEstudio->setPldIndicador($indicador);
        $combo = $objPlanEstudioDAO->ExecuteCompleteComboboxAsignarCursos($objPlanEstudioDAO->objPlanEstudio);
    }
    foreach ($combo as $key => $val) {
        $cbx[$key] = array("idPlanEstudio" => $val->idPlanEstudio, "idCurso" => $val->idCurso, "crsNombre" => $val->crsNombre);
    }
    echo json_encode($cbx);
}