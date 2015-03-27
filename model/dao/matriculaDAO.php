<?php

require_once __DIR__ . '/../config/mysqli.data.php';
require_once __DIR__ . '/../entity/matricula.php';

class MatriculaDAO {

    public $objMatricula;
    private $task;

    const TABLE = 'matricula';

    public function __construct() {
        $this->objMatricula = new Matricula();
        $this->task = new Task();
    }

    public function ExecuteSave($objMatricula) {
        $idMatricula = $this->task->getId(self::TABLE, 'idMatricula');
        $Fecha = $objMatricula->getFecha();
        $Hora = $objMatricula->getHora();
        $idUsuarioCarrera = $objMatricula->getIdUsuarioCarrera();
        $idCiclo = $objMatricula->getIdCiclo();
        $idSeccion = $objMatricula->getIdSeccion();
        $idSede = $objMatricula->getIdSede();
        $idEstadoMatricula = $objMatricula->getIdEstadoMatricula();
        $Indicador = $objMatricula->getIndicador();

        $this->task->setTables(self::TABLE);
        $this->task->setFields('idMatricula;mtcFecha;mtcHora;idUsuarioCarrera;idCiclo;idSeccion;idSede;idEstadoMatricula;mtcIndicador');
        $this->task->setValues($Fecha . ';' . $Hora . ';' . $idUsuarioCarrera . ';' . $idCiclo . ';' . $idSeccion . ';' . $idSede . ';' . $idEstadoMatricula . ';' . $Indicador);
        $result[0] = $this->task->executeInsert('idMatricula');
        $result[1] = $idMatricula;
        return $result;
    }

    public function CurrentStudentsSeccion($objMatricula) {
        $idSeccion = $objMatricula->getIdSeccion();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idUsuarioCarrera;idCiclo;idSeccion;idSede');
        $this->task->setWhereFields('idSeccion;idEstadoMatricula;mtcIndicador');
        $this->task->setWhereLogical('=;=;=');
        $this->task->setWhereValues($idSeccion . ';1;1');
        return $this->task->executeSelect();
    }

    public function DuplicateMatricula($objMatricula) {
        $idCiclo = $objMatricula->getIdCiclo();
        $idUsuarioCarrera = $objMatricula->getIdUsuarioCarrera();
        $estadoMatricula = $objMatricula->getIdEstadoMatricula();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idMatricula;idUsuarioCarrera;idCiclo;idSeccion;idSede');
        $this->task->setWhereFields('idUsuarioCarrera;idCiclo;idEstadoMatricula;mtcIndicador');
        $this->task->setWhereLogical('=;=;=;=');
        $this->task->setWhereValues($idUsuarioCarrera . ';' . $idCiclo . ';' . $estadoMatricula . ';1');
        return $this->task->executeSelect();
    }

    public function SearchMatriculaID($objMatricula) {
        $idMatricula = $objMatricula->getIdMatricula();
        $this->task->setTables(self::TABLE . ';usuariocarrera;seccion');
        $this->task->setFields('idMatricula;mtcFecha;mtcHora;idUsuarioCarrera;idCarrera;idUsuario;idCiclo;idSeccion;idTurno;idSede;idEstadoMatricula;mtcIndicador');
        $this->task->setIndex('0;0;0;0;1;1;0;0;2;0;0;0');
        $this->task->setTypeJoin('inner');
        $this->task->setOnJoin('m0.idUsuarioCarrera=u1.idUsuarioCarrera;m0.idSeccion=s2.idSeccion');
        $this->task->setWhereFields('m0.idMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idMatricula);
        $this->task->setBeginLimit('0');
        $this->task->setEndLimit('1');
        return $this->task->executeMultiSelect();
    }

}
