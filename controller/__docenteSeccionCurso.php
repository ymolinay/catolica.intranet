<?php

session_start();
require_once __DIR__ . '/../model/dao/docenteSeccionCursoDAO.php';
require_once __DIR__ . '/../model/dao/gridDAO.php';

$objDocenteSeccionCursoDAO = new DocenteSeccionCursoDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

if ($action == 'save') {
    $error = TRUE;
    $idDocenteSeccionCurso = $_GET[''];
    $idSeccion = $_GET['idSeccion'];
    $idUsuario = $_GET['idDocente'];
    $idPlanEstudio = $_GET['idPlanEstudioCursos'];
    $indicador = '1';
    $objDocenteSeccionCursoDAO->objDocenteSeccionCurso->setIdDocenteSeccionCurso($idDocenteSeccionCurso);
    $objDocenteSeccionCursoDAO->objDocenteSeccionCurso->setIdSeccion($idSeccion);
    $objDocenteSeccionCursoDAO->objDocenteSeccionCurso->setIdUsuario($idUsuario);
    $objDocenteSeccionCursoDAO->objDocenteSeccionCurso->setIdPlanEstudio($idPlanEstudio);
    $objDocenteSeccionCursoDAO->objDocenteSeccionCurso->setIndicador($indicador);
    if ($idDocenteSeccionCurso != '') {
        $resultDocenteSeccionCurso = $objDocenteSeccionCursoDAO->ExecuteUpdate($objDocenteSeccionCursoDAO->objDocenteSeccionCurso);
    } else {
        $resultDocenteSeccionCurso = $objDocenteSeccionCursoDAO->ExecuteSave($objDocenteSeccionCursoDAO->objDocenteSeccionCurso);
    }
    $error = ($resultDocenteSeccionCurso !== TRUE) ? TRUE : FALSE;
    echo ($error) ? 'fail' : 'success';
}