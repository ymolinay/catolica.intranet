<?php

require_once __DIR__ . '/../config/mysqli.data.php';
require_once __DIR__ . '/../entity/docenteSeccionCurso.php';

class DocenteSeccionCursoDAO {

    public $objDocenteSeccionCurso;
    private $task;

    const TABLE = "docenteseccioncurso";

    public function __construct() {
        $this->objDocenteSeccionCurso = new DocenteSeccionCurso();
        $this->task = new Task();
    }
    
    public function ExecuteSave($objDocenteSeccionCurso) {
        //$idDocenteSeccionCurso = $objDocenteSeccionCurso->getIdDocenteSeccionCurso();
        $idSeccion = $objDocenteSeccionCurso->getIdSeccion();
        $idUsuario = $objDocenteSeccionCurso->getIdUsuario();
        $idPlanEstudio = $objDocenteSeccionCurso->getIdPlanEstudio();
        $indicador = $objDocenteSeccionCurso->getIndicador();

        $this->task->setTables(self::TABLE);
        $this->task->setFields('idDocenteSeccionCurso;idSeccion;idUsuario;idPlanEstudio;dscIndicador');
        $this->task->setValues($idSeccion . ';' . $idUsuario . ';' . $idPlanEstudio . ';' . $indicador);
        return $this->task->executeInsert('idDocenteSeccionCurso');
    }
    
}
