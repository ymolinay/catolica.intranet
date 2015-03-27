<?php

require_once __DIR__.'/../config/mysqli.data.php';
require_once __DIR__.'/../entity/area.php';

class AreaDAO {
    
    public $objArea;
    private $task;
    
    const TABLA = "area";
    
    public function __construct() {
        $this->objArea = new Area();
        $this->task = new Task();
    }
    
    public function ExecuteSave($objArea) {
        
        $descripcion = $objArea->getDescripcion();
        $idSede = $objArea->getIdSede();
        $indicador = $objArea->getIndicador();

        $idArea = $this->task->getId(self::TABLA, 'idArea'); //generar id
        $this->task->setTables(self::TABLA);
        $this->task->setFields('idArea;descripcion;idSede;indicador');
        $this->task->setValues($descripcion.";".$idSede.";".$indicador);
        $result = $this->task->executeInsert("idArea");
        return $result;
        
    }
    
    public function ExecuteSelect($objArea) {
        $idSede = $objArea->getIdSede();

        $this->task->setTables(self::TABLA);
        $this->task->setFields('idArea;descripcion;idSede;indicador');
        $this->task->setWhereFields('indicador;idSede');
        $this->task->setWhereLogical('=;=');
        $this->task->setWhereValues('1;' . $idSede);

        return $this->task->executeSelect();
    }
    
    public function ExecuteCompleteCombobox($idCuenta) {
        $this->task->setTables(self::TABLA . ';sede;cuenta');
        $this->task->setFields('idArea;descripcion');
        $this->task->setIndex('0;0');
        $this->task->setTypeJoin('inner;inner');
        $this->task->setOnJoin('s1.idSede=a0.idSede;c2.idCuenta=s1.idCuenta');
        $this->task->setWhereFields('c2.idCuenta;a0.indicador');
        $this->task->setWhereLogical('=;=');
        $this->task->setWhereValues($idCuenta.';1');
        $this->task->setOrder('a0.descripcion');
        $this->task->setValuesOrder('asc');
        return $this->task->executeMultiSelect();
    }
    
}
