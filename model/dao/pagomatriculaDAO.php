<?php

require_once __DIR__ . '/../config/mysqli.data.php';
require_once __DIR__ . '/../entity/pagoMatricula.php';

class PagoMatriculaDAO {

    public $objPagoMatricula;
    private $task;

    const TABLE = 'pagomatricula';

    public function __construct() {
        $this->objPagoMatricula = new PagoMatricula();
        $this->task = new Task();
    }

    public function ExecuteSave($objPagoMatricula) {
        $idPagoMatricula = $this->task->getId(self::TABLE, 'idPagoMatricula');
        $Fecha = $objPagoMatricula->getFecha();
        $Hora = $objPagoMatricula->getHora();
        $TipoPago = $objPagoMatricula->getTipoPago();
        $ModoPago = $objPagoMatricula->getModoPago();
        $TipoComprobante = $objPagoMatricula->getTipoComprobante();
        $Pago = $objPagoMatricula->getPago();
        $PagoDesc = $objPagoMatricula->getPagoDesc();
        $Beneficio = $objPagoMatricula->getBeneficio();
        $idMatricula = $objPagoMatricula->getIdMatricula();
        $Indicador = $objPagoMatricula->getIndicador();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idPagoMatricula;pgmFecha;pgmHora;pgmTipoPago;pgmModoPago;pgmTipoComprobante;pgmPago;pgmPagoDesc;pgmBeneficio;idMatricula;pgmIndicador');
        $this->task->setValues($Fecha . ';' . $Hora . ';' . $TipoPago . ';' . $ModoPago . ';' . $TipoComprobante . ';' . $Pago . ';' . $PagoDesc . ';' . $Beneficio . ';' . $idMatricula . ';' . $Indicador);
        $result[0] = $this->task->executeInsert('idPagoMatricula');
        $result[1] = $idPagoMatricula;
        return $result;
    }

    public function ExecuteUpdate($objPagoMatricula) {
        $idPagoMatricula = $objPagoMatricula->getIdPagoMatricula();
        $idSede = $objPagoMatricula->getIdSede();
        $idTipoBeneficio = $objPagoMatricula->getIdTipoBeneficio();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idSede;idTipoBeneficio');
        $this->task->setValues($idSede . ';' . $idTipoBeneficio);
        $this->task->setWhereFields('idPagoMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idPagoMatricula);
        $result[0] = $this->task->executeUpdate();
        $result[1] = $idPagoMatricula;
        return $result;
    }

    public function ExecuteDelete($objPagoMatricula) {
        $idPagoMatricula = $objPagoMatricula->getIdPagoMatricula();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('pgmIndicador');
        $this->task->setValues('0');
        $this->task->setWhereFields('idPagoMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idPagoMatricula);
        $result = $this->task->executeUpdate();
        return $result;
    }

    public function DuplicatePagoMatricula($objPagoMatricula) {
        $idCiclo = $objPagoMatricula->getIdCiclo();
        $idUsuarioCarrera = $objPagoMatricula->getIdUsuarioCarrera();
        $estadoPagoMatricula = $objPagoMatricula->getIdEstadoMatricula();
        $this->task->setTables(self::TABLE);
        $this->task->setFields('idPagoMatricula;idUsuarioCarrera;idCiclo;idSeccion;idSede');
        $this->task->setWhereFields('idUsuarioCarrera;idCiclo;idEstadoMatricula;pgmIndicador');
        $this->task->setWhereLogical('=;=;=;=');
        $this->task->setWhereValues($idUsuarioCarrera . ';' . $idCiclo . ';' . $estadoMatricula . ';1');
        return $this->task->executeSelect();
    }

    public function CountPago($objPagoMatricula) {
        $idMatricula = $objPagoMatricula->getIdMatricula();
        $this->task->setTables(self::TABLE . ';matricula;usuariocarrera;carrera');
        $this->task->setFields('carMeses,COUNT(*) as pagos');
        $this->task->setIndex('3;0');
        $this->task->setTypeJoin('inner;inner;inner');
        $this->task->setOnJoin('p0.idMatricula=m1.idMatricula;m1.idUsuarioCarrera=u2.idUsuarioCarrera;u2.idCarrera=c3.idCarrera');
        $this->task->setWhereFields('p0.idMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idMatricula);
        return $this->task->executeMultiSelect();
    }

    public function SearchPagoMatriculaID($objPagoMatricula) {
        $idPagoMatricula = $objPagoMatricula->getIdPagoMatricula();
        $this->task->setTables(self::TABLE . ';usuariocarrera;seccion');
        $this->task->setFields('idPagoMatricula;pgmFecha;pgmHora;idUsuarioCarrera;idCarrera;idUsuario;idCiclo;idSeccion;idTurno;idSede;idTipoBeneficio;idEstadoMatricula;pgmIndicador');
        $this->task->setIndex('0;0;0;0;1;1;0;0;2;0;0;0;0');
        $this->task->setTypeJoin('inner;inner');
        $this->task->setOnJoin('m0.idUsuarioCarrera=u1.idUsuarioCarrera;m0.idSeccion=s2.idSeccion');
        $this->task->setWhereFields('m0.idPagoMatricula');
        $this->task->setWhereLogical('=');
        $this->task->setWhereValues($idPagoMatricula);
        $this->task->setBeginLimit('0');
        $this->task->setEndLimit('1');
        return $this->task->executeMultiSelect();
    }

    public function ExecuteCompleteCombobox($objPagoMatricula) {
        $idUsuarioCarrera = $objPagoMatricula->getIdUsuarioCarrera();
        $this->task->setTables(self::TABLE . ';usuariocarrera;tipobeneficio;seccion;sede;estadomatricula;ciclo;turno');
        $this->task->setFields('idPagoMatricula;pgmFecha;pgmHora;idUsuarioCarrera;idTipoBeneficio;tboDescripcion;idSeccion;scnDescripcion;idSede;sdeNombre;idEstadoMatricula;etmDescripcion;idCiclo;cloDescripcion;idTurno;troDescripcion');
        $this->task->setIndex('0;0;0;1;0;2;0;3;0;4;0;5;0;6;3;7');
        $this->task->setTypeJoin('inner;inner;inner;inner;inner;inner;inner');
        $this->task->setOnJoin('m0.idUsuarioCarrera=u1.idUsuarioCarrera;m0.idTipoBeneficio=t2.idTipoBeneficio;m0.idSeccion=s3.idSeccion;m0.idSede=s4.idSede;m0.idEstadoMatricula=e5.idEstadoMatricula;m0.idCiclo=c6.idCiclo;s3.idTurno=t7.idTurno');
        $this->task->setWhereFields('m0.idUsuarioCarrera;m0.pgmIndicador;u1.uocIndicador');
        $this->task->setWhereLogical('=;=;=');
        $this->task->setWhereValues($idUsuarioCarrera . ';1;1');
        $this->task->setOrder('m0.idPagoMatricula');
        $this->task->setValuesOrder('asc');
        return $this->task->executeMultiSelect();
    }

}
