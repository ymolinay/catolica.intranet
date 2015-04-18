<?php

session_start();
require_once __DIR__ . '/../model/dao/pagoMatriculaDAO.php';
require_once __DIR__ . '/../model/dao/matriculaDAO.php';
require_once __DIR__ . '/../model/dao/carreraDAO.php';

$objPagoMatriculaDAO = new PagoMatriculaDAO();
$objMatriculaDAO = new MatriculaDAO();
$objCarreraDAO = new CarreraDAO();

$action = $_GET["action"];

if ($action == "save") {
    $error = TRUE;
    $idPagoMatricula = $_GET['idPagoMatricula'];
    $TipoPago = $_GET['TipoPago'];
    $ModoPago = $_GET['ModoPago'];
    $TipoComprobante = $_GET['TipoComprobante'];
    $Pago = $_GET['Pago'];
    $PagoDesc = $_GET['PagoDesc'];
    $Beneficio = $_GET['Beneficio'];
    $Fecha = date('Y-m-d');
    $Hora = date('H:i:s');
    $idMatricula = $_GET['idMatricula'];
    $Indicador = 1;

    $objPagoMatriculaDAO->objPagoMatricula->setIdPagoMatricula($idPagoMatricula);
    $objPagoMatriculaDAO->objPagoMatricula->setTipoPago($TipoPago);
    $objPagoMatriculaDAO->objPagoMatricula->setModoPago($ModoPago);
    $objPagoMatriculaDAO->objPagoMatricula->setTipoComprobante($TipoComprobante);
    $objPagoMatriculaDAO->objPagoMatricula->setPago($Pago);
    $objPagoMatriculaDAO->objPagoMatricula->setPagoDesc($PagoDesc);
    $objPagoMatriculaDAO->objPagoMatricula->setBeneficio($Beneficio);
    $objPagoMatriculaDAO->objPagoMatricula->setFecha($Fecha);
    $objPagoMatriculaDAO->objPagoMatricula->setHora($Hora);
    $objPagoMatriculaDAO->objPagoMatricula->setIdMatricula($idMatricula);
    $objPagoMatriculaDAO->objPagoMatricula->setIndicador($Indicador);

    if ($idPagoMatricula != '') {
        $matricula = $objPagoMatriculaDAO->ExecuteUpdate($objPagoMatriculaDAO->objPagoMatricula);
    } else {
        $matricula = $objPagoMatriculaDAO->ExecuteSave($objPagoMatriculaDAO->objPagoMatricula);
        $idPagoMatricula = $matricula[1];
    }
    
    $error = ($matricula[0] !== TRUE) ? TRUE : FALSE;
    echo ($error) ? 'fail' : 'success';
}

if ($action == "countPago") {
    $idMatricula = $_GET['idMatricula'];
    $objPagoMatriculaDAO->objPagoMatricula->setIdMatricula($idMatricula);
    $pagos = $objPagoMatriculaDAO->CountPago($objPagoMatriculaDAO->objPagoMatricula);
    echo json_encode($pagos);
}

if ($action == "searchDuplicate") {
    $idCiclo = $_GET['_idCiclo'];
    $idCiclo = (!empty($idCiclo)) ? $idCiclo : FALSE;
    $idUsuarioCarrera = $_GET['_idUsuarioCarrera'];
    $idUsuarioCarrera = (!empty($idUsuarioCarrera)) ? $idUsuarioCarrera : FALSE;
    if ($idCiclo && $idUsuarioCarrera) {
        $estadoMatricula = 1;
        $objPagoMatriculaDAO->objPagoMatricula->setIdCiclo($idCiclo);
        $objPagoMatriculaDAO->objPagoMatricula->setIdUsuarioCarrera($idUsuarioCarrera);
        $objPagoMatriculaDAO->objPagoMatricula->setIdEstadoMatricula($estadoMatricula);
        $duplicateMatricula = $objPagoMatriculaDAO->DuplicateMatricula($objPagoMatriculaDAO->objPagoMatricula);
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
        $objPagoMatriculaDAO->objPagoMatricula->setIdMatricula($idMatricula);
        $jsonMatricula = $objPagoMatriculaDAO->SearchMatriculaID($objPagoMatriculaDAO->objPagoMatricula);
        $jsonMatricula = $jsonMatricula[0];
    } else {
        $jsonMatricula = FALSE;
    }

    echo json_encode($jsonMatricula);
}

if ($action == "delete") {
    $error = TRUE;
    $idMatricula = base64_decode($_GET['idMatricula']);
    $code = $_GET['code'];
    $indicador = 1;
    if ($code == '1234') {
        $objPagoMatriculaDAO->objPagoMatricula->setIdMatricula($idMatricula);
        $objPagoMatriculaDAO->objPagoMatricula->setIndicador($indicador);
        $matricula = $objPagoMatriculaDAO->ExecuteDelete($objPagoMatriculaDAO->objPagoMatricula);
        $error = ($matricula !== TRUE) ? TRUE : FALSE;
        echo ($error) ? 'fail' : 'success';
    } else {
        echo 'errorCode';
    }
}

if ($action == 'combobox') {
    $cbx = array();
    $idUsuarioCarrera = $_GET['idUsuarioCarrera'];
    $idUsuarioCarrera = (!empty($idUsuarioCarrera)) ? $idUsuarioCarrera : 'undefined';
    $objPagoMatriculaDAO->objPagoMatricula->setIdUsuarioCarrera($idUsuarioCarrera);
    $combo = $objPagoMatriculaDAO->ExecuteCompleteCombobox($objPagoMatriculaDAO->objPagoMatricula);
    foreach ($combo as $key => $val) {
		$objTipoBeneficioDAO->objTipoBeneficio->setIdTipoBeneficio($val->idTipoBeneficio);
		$arrayBeneficio = $objTipoBeneficioDAO->SearchTipoBeneficio($objTipoBeneficioDAO->objTipoBeneficio);
        $cbx[$key] = array(
			"idMatricula" => $val->idMatricula, 
			"mtcFecha" => $val->mtcFecha, 
			"mtcHora" => $val->mtcHora, 
			"idTipoBeneficio" => $val->idTipoBeneficio, 
			"tboDescripcion" => $val->tboDescripcion, 
			"idSeccion" => $val->idSeccion, 
			"scnDescripcion" => $val->scnDescripcion, 
			"idSede" => $val->idSede, 
			"sdeNombre" => $val->sdeNombre, 
			"idEstadoMatricula" => $val->idEstadoMatricula, 
			"etmDescripcion" => $val->etmDescripcion, 
			"idCiclo" => $val->idCiclo, 
			"cloDescripcion" => $val->cloDescripcion, 
			"idTurno" => $val->idTurno, 
			"troDescripcion" => $val->troDescripcion,
			"tboPagoMatricula" => $arrayBeneficio[0]->tboPagoMatricula,
			"tboPagoMensual" => $arrayBeneficio[0]->tboPagoMensual,
			"tboPaMatriculaDesc" => $arrayBeneficio[0]->tboPaMatriculaDesc,
			"tboPaMensualDesc" => $arrayBeneficio[0]->tboPaMensualDesc
		);
    }
    echo json_encode($cbx);
}
