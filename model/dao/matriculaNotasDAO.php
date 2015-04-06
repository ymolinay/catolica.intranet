<?php

require_once __DIR__ . '/../config/mysqli.data.php';
require_once __DIR__ . '/../entity/matriculaNotas.php';

class MatriculaNotasDAO {

    public $objMatriculaNotas;
    private $task;

    const TABLE = 'matriculanotas';

    public function __construct() {
        $this->objMatriculaNotas = new MatriculaNotas();
        $this->task = new Task();
    }

    public function ExecuteSave($objMatriculaNotas) {
        //$idMatriculaNotas = $objMatriculaNotas->getIdMatriculaNotas();
        $u1Ev1 = $objMatriculaNotas->getU1Ev1();
        $u1Ev2 = $objMatriculaNotas->getU1Ev2();
        $u1Ev3 = $objMatriculaNotas->getU1Ev3();
        $u1Ev4 = $objMatriculaNotas->getU1Ev4();
        $u1PromPract = $objMatriculaNotas->getU1PromPract();
        $u1ExParcial = $objMatriculaNotas->getU1ExParcial();
        $u1Promedio = $objMatriculaNotas->getU1Promedio();
        $u2Ev1 = $objMatriculaNotas->getU2Ev1();
        $u2Ev2 = $objMatriculaNotas->getU2Ev2();
        $u2Ev3 = $objMatriculaNotas->getU2Ev3();
        $u2Ev4 = $objMatriculaNotas->getU2Ev4();
        $u2PromPract = $objMatriculaNotas->getU2PromPract();
        $u2Trabajo = $objMatriculaNotas->getU2Trabajo();
        $u2ExFinal = $objMatriculaNotas->getU2ExFinal();
        $u2Promedio = $objMatriculaNotas->getU2Promedio();
        $susti = $objMatriculaNotas->getSusti();
        $promedioFinal = $objMatriculaNotas->getPromedioFinal();
        $idMatriculaDetalle = $objMatriculaNotas->getIdMatriculaDetalle();
        $indicador = $objMatriculaNotas->getIndicador();

        $this->task->setTables(self::TABLE);
        $this->task->setFields('idMatriculaNotas;mntU1Ev1;mntU1Ev2;mntU1Ev3;mntU1Ev4;mntU1PromPract;mntU1ExParcial;mntU1Promedio;mntU2Ev1;mntU2Ev2;mntU2Ev3;mntU2Ev4;mntU2PromPract;mntU2Trabajo;mntU2ExFinal;mntU2Promedio;mntSusti;mntPromedioFinal;idMatriculaDetalle;mntIndicador');
        $this->task->setValues($u1Ev1 . ';' . $u1Ev2 . ';' . $u1Ev3 . ';' . $u1Ev4 . ';' . $u1PromPract . ';' . $u1ExParcial . ';' . $u1Promedio . ';' . $u2Ev1 . ';' . $u2Ev2 . ';' . $u2Ev3 . ';' . $u2Ev4 . ';' . $u2PromPract . ';' . $u2Trabajo . ';' . $u2ExFinal . ';' . $u2Promedio . ';' . $susti . ';' . $promedioFinal . ';' . $idMatriculaDetalle . ';' . $indicador);
        return $this->task->executeInsert('idMatriculaNotas');
    }

}
