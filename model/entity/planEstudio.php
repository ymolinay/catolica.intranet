<?php

class PlanEstudio {
    private $idPlanEstudio;
    private $idCarrera;
    private $idCurso;
    private $idCiclo;
    private $pldIndicador;
    
    function getIdPlanEstudio() {
        return $this->idPlanEstudio;
    }

    function getIdCarrera() {
        return $this->idCarrera;
    }

    function getIdCurso() {
        return $this->idCurso;
    }

    function getIdCiclo() {
        return $this->idCiclo;
    }

    function getPldIndicador() {
        return $this->pldIndicador;
    }

    function setIdPlanEstudio($idPlanEstudio) {
        $this->idPlanEstudio = $idPlanEstudio;
    }

    function setIdCarrera($idCarrera) {
        $this->idCarrera = $idCarrera;
    }

    function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    function setIdCiclo($idCiclo) {
        $this->idCiclo = $idCiclo;
    }

    function setPldIndicador($pldIndicador) {
        $this->pldIndicador = $pldIndicador;
    }


}