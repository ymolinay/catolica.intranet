<?php

session_start();
require_once __DIR__.'/../model/dao/cicloDAO.php';
require_once __DIR__.'/../model/dao/gridDAO.php';

$objSeccionDAO = new CicloDAO();
$objGridDAO = new GridDAO();

$action = $_GET["action"];

if ($action == "combobox") {
    $cbx = array();
    $combo = $objSeccionDAO->ExecuteCompleteCombobox();
    foreach ($combo as $key => $val) {
        $cbx[$key] = array("idCiclo" => $val->idCiclo, "cloDescripcion" => $val->cloDescripcion);
    }
    echo json_encode($cbx);
}