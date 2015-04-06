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

    public function CompleteComboboxDocente($objDocenteSeccionCurso) {
        $idUsuario = $objDocenteSeccionCurso->getIdUsuario();
        $this->task->setTables(self::TABLE . ';usuario;personal');
        $this->task->setFields('idDocenteSeccionCurso;idUsuario;prsNombre;prsApellidoPaterno;prsApellidoMaterno;prsDNI');
        $this->task->setIndex('0;1;2;2;2;2');
        $this->task->setTypeJoin('inner;inner');
        $this->task->setOnJoin('d0.idUsuario=u1.idUsuario;u1.idPersonal=p2.idPersonal');
        $this->task->setWhereFields('d0.idUsuario;d0.dscIndicador');
        $this->task->setWhereLogical('like;=');
        $this->task->setWhereValues($idUsuario . ';1');
        $this->task->setGroup('u1.idUsuario');
        $this->task->setOrder('p2.prsApellidoPaterno');
        $this->task->setValuesOrder('asc');
        return $this->task->executeMultiSelect();
    }

}
