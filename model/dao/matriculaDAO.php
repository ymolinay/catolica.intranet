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
        $idTipoBeneficio = $objMatricula->getIdTipoBeneficio();
        $idEstadoMatricula = $objMatricula->getIdEstadoMatricula();
        $Indicador = $objMatricula->getIndicador();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idMatricula;mtcFecha;mtcHora;idUsuarioCarrera;idCiclo;idSeccion;idSede;idTipoBeneficio;idEstadoMatricula;mtcIndicador');
        $this->task->setValues($Fecha . ';' . $Hora . ';' . $idUsuarioCarrera . ';' . $idCiclo . ';' . $idSeccion . ';' . $idSede . ';' . $idTipoBeneficio . ';' . $idEstadoMatricula . ';' . $Indicador);
        $result[0] = $this->task->executeInsert('idMatricula');
        $result[1] = $idMatricula;
        return $result;
    }

    public function ExecuteUpdate($objMatricula) {
        $idMatricula = $objMatricula->getIdMatricula();
        $idSede = $objMatricula->getIdSede();
        $idTipoBeneficio = $objMatricula->getIdTipoBeneficio();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idSede;idTipoBeneficio');
        $this->task->setValues($idSede . ';' . $idTipoBeneficio);
        $this->task->setWhereFields('idMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idMatricula);
        $result[0] = $this->task->executeUpdate();
        $result[1] = $idMatricula;
        return $result;
    }

    public function ExecuteDelete($objMatricula) {
        $idMatricula = $objMatricula->getIdMatricula();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('mtcIndicador');
        $this->task->setValues('0');
        $this->task->setWhereFields('idMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idMatricula);
        $result = $this->task->executeUpdate();
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
        $this->task->setFields('idMatricula;mtcFecha;mtcHora;idUsuarioCarrera;idCarrera;idUsuario;idCiclo;idSeccion;idTurno;idSede;idTipoBeneficio;idEstadoMatricula;mtcIndicador');
        $this->task->setIndex('0;0;0;0;1;1;0;0;2;0;0;0;0');
        $this->task->setTypeJoin('inner;inner');
        $this->task->setOnJoin('m0.idUsuarioCarrera=u1.idUsuarioCarrera;m0.idSeccion=s2.idSeccion');
        $this->task->setWhereFields('m0.idMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idMatricula);
        $this->task->setBeginLimit('0');
        $this->task->setEndLimit('1');
        return $this->task->executeMultiSelect();
    }
    
    public function ExecuteCompleteCombobox() {
        $this->task->setTables(self::TABLE . ';usuario');
        $this->task->setFields('idUsuario;prsNombre;prsApellidoPaterno;prsApellidoMaterno;prsDNI');
        $this->task->setIndex('1;0;0;0;0');
        $this->task->setTypeJoin('inner');
        $this->task->setOnJoin('p0.idPersonal=u1.idPersonal');
        $this->task->setWhereFields('p0.prsIndicador;u1.usrIndicador');
        $this->task->setWhereLogical('=;=');
        $this->task->setWhereValues('1;1');
        $this->task->setOrder('p0.prsApellidoPaterno');
        $this->task->setValuesOrder('asc');
        return $this->task->executeMultiSelect();
    }

}
