<?php

session_start();
require_once __DIR__ . '/../model/dao/matriculaNotasDAO.php';
require_once __DIR__ . '/../model/dao/gridDAO.php';

$objMatriculaNotasDAO = new MatriculaNotasDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

if ($action == "SearchRatingsStudentsOfSeccionPlanEstudio") {
    $json = false;
    $jsonResult = false;
    $idCarrera = $_GET['_idCar'];
    $idCiclo = $_GET['_idCic'];
    $idPlanEstudio = $_GET['_idPla'];
    $idTurno = $_GET['_idTur'];
    $idSeccion = $_GET['_idSec'];
    if (true) {
        $objMatriculaNotasDAO->objMatriculaNotas->setIndicador('1');
        $json = $objMatriculaNotasDAO->SearchRatingsStudentsOfSeccionPlanEstudio($objMatriculaNotasDAO->objMatriculaNotas, $idCarrera, $idCiclo, $idPlanEstudio, $idTurno, $idSeccion);
    }
    if ($json !== false) {
        $jsonResult = new stdClass();
        foreach ($json as $key => $val) {
            $jsonResult->idCarrera = $val->idCarrera;
            $jsonResult->Carrera = $val->carDescripcion;
            $jsonResult->idCiclo = $val->idCiclo;
            $jsonResult->Ciclo = $val->cloDescripcion;
            $jsonResult->idPlanEstudio = $val->idPlanEstudio;
            $jsonResult->Curso = $val->crsNombre;
            $jsonResult->idTurno = $val->idTurno;
            $jsonResult->Turno = $val->troDescripcion;
            $jsonResult->idSeccion = $val->idSeccion;
            $jsonResult->Seccion = $val->scnDescripcion;
            $jsonResult->rows[$key]['idMatriculaNotas'] = $val->scnDescripcion = $val->idMatriculaNotas;
            $jsonResult->rows[$key]['mntU1Ev1'] = $val->mntU1Ev1;
            $jsonResult->rows[$key]['mntU1Ev2'] = $val->mntU1Ev2;
            $jsonResult->rows[$key]['mntU1Ev3'] = $val->mntU1Ev3;
            $jsonResult->rows[$key]['mntU1Ev4'] = $val->mntU1Ev4;
            $jsonResult->rows[$key]['mntU1PromPract'] = $val->mntU1PromPract;
            $jsonResult->rows[$key]['mntU1ExParcial'] = $val->mntU1ExParcial;
            $jsonResult->rows[$key]['mntU1Promedio'] = $val->mntU1Promedio;
            $jsonResult->rows[$key]['mntU2Ev1'] = $val->mntU2Ev1;
            $jsonResult->rows[$key]['mntU2Ev2'] = $val->mntU2Ev2;
            $jsonResult->rows[$key]['mntU2Ev3'] = $val->mntU2Ev3;
            $jsonResult->rows[$key]['mntU2Ev4'] = $val->mntU2Ev4;
            $jsonResult->rows[$key]['mntU2PromPract'] = $val->mntU2PromPract;
            $jsonResult->rows[$key]['mntU2Trabajo'] = $val->mntU2Trabajo;
            $jsonResult->rows[$key]['mntU2ExFinal'] = $val->mntU2ExFinal;
            $jsonResult->rows[$key]['mntU2Promedio'] = $val->mntU2Promedio;
            $jsonResult->rows[$key]['mntSusti'] = $val->mntSusti;
            $jsonResult->rows[$key]['mntPromedioFinal'] = $val->mntPromedioFinal;
            $jsonResult->rows[$key]['idMatriculaDetalle'] = $val->idMatriculaDetalle;
            $jsonResult->rows[$key]['idMatricula'] = $val->idMatricula;
            $jsonResult->rows[$key]['idUsuarioCarrera'] = $val->idUsuarioCarrera;
            $jsonResult->rows[$key]['idUsuario'] = $val->idUsuario;
            $jsonResult->rows[$key]['idPersonal'] = $val->idPersonal;
            $jsonResult->rows[$key]['prsNombre'] = $val->prsNombre;
            $jsonResult->rows[$key]['prsApellidoPaterno'] = $val->prsApellidoPaterno;
            $jsonResult->rows[$key]['prsApellidoMaterno'] = $val->prsApellidoMaterno;
            $jsonResult->rows[$key]['prsDNI'] = $val->prsDNI;
        }
    }
    echo json_encode($jsonResult);
}