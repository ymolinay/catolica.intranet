<?php

require_once __DIR__.'/../config/mysqli.data.php';
require_once __DIR__.'/../entity/carrera.php';

class CarreraDAO {

    public $objCarrera;
    private $task;

    const TABLE = "carrera";

    public function __construct() {
        $this->objCarrera = new Carrera();
        $this->task = new Task();
    }

    public function SearchAllData() {
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idCarrera;carDescripcion;carPeriodos;idCosto');
        $this->task->setOrder('carDescripcion');
        $this->task->setValuesOrder('asc');
        return $this->task->executeSelect();
    }

    public function ExecuteSearch($objCarrera) {
        $idCarrera = $objCarrera->getIdCarrera();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idCarrera;carDescripcion;carPeriodos;idCosto');
        $this->task->setWhereFields('idCarrera');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idCarrera);
        $this->task->setOrder('carDescripcion');
        $this->task->setValuesOrder('asc');
        return $this->task->executeSelect();
    }

    public function ExecuteSave($objCarrera) {
        $descripcion = $objCarrera->getDescripcion();
        $periodos = $objCarrera->getPeriodos();
        $idCosto = $objCarrera->getIdCosto();

        $this->task->setTables(self::TABLE);
        $this->task->setFields('idCarrera;carDescripcion;carPeriodos;idCosto');
        $this->task->setValues($descripcion . ';' . $periodos . ';' . $idCosto);
        return $this->task->executeInsert('idCarrera');
    }

    public function ExecuteUpdate($objCarrera) {
        $idCarrera = $objCarrera->getIdCarrera();
        $descripcion = $objCarrera->getDescripcion();
        $periodos = $objCarrera->getPeriodos();
        $idCosto = $objCarrera->getIdCosto();

        $this->task->setTables(self::TABLE);
        $this->task->setFields('carDescripcion;carPeriodos;idCosto');
        $this->task->setValues($descripcion . ';' . $periodos . ';' . $idCosto);
        $this->task->setWhereFields('idCarrera');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idCarrera);
        return $this->task->executeUpdate();
    }

}
