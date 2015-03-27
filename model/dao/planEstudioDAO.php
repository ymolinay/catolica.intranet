<?php

require_once __DIR__.'/../config/mysqli.data.php';
require_once __DIR__.'/../entity/planEstudio.php';

class PlanEstudioDAO {

    public $objPlanEstudio;
    private $task;

    const TABLE = "planestudio";

    public function __construct() {
        $this->objPlanEstudio = new PlanEstudio();
        $this->task = new Task();
    }

    public function GeneratePlanEstudio($objPlanEstudio) {
        $idCarrera = $objPlanEstudio->getIdCarrera();
        $this->task->setTables(self::TABLE . ';carrera;curso;ciclo');
        $this->task->setFields('idPlanEstudio;idCarrera;carDescripcion;carPeriodos;idCurso;crsNombre;idCiclo;cloDescripcion');
        $this->task->setIndex('0;0;1;1;0;2;0;3');
        $this->task->setTypeJoin('inner;inner;inner');
        $this->task->setOnJoin('p0.idCarrera=c1.idCarrera;p0.idCurso=c2.idCurso;p0.idCiclo=c3.idCiclo');
        $this->task->setWhereFields('p0.idCarrera;p0.pldIndicador');
        $this->task->setWhereLogical('=;=');
        $this->task->setWhereValues($idCarrera.';1');
        $this->task->setOrder('p0.idCiclo');
        $this->task->setValuesOrder('asc');
        return $this->task->executeMultiSelect();
    }

}
