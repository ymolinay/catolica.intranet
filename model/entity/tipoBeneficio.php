<?php

class TipoBeneficio{
    private $idTipoBeneficio;
    private $descripcion;
    private $descuentoPorcentaje;
    private $idTipoPago;
    private $indicador;
    
    function getIdTipoBeneficio() {
        return $this->idTipoBeneficio;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDescuentoPorcentaje() {
        return $this->descuentoPorcentaje;
    }

    function getIdTipoPago() {
        return $this->idTipoPago;
    }

    function getIndicador() {
        return $this->indicador;
    }

    function setIdTipoBeneficio($idTipoBeneficio) {
        $this->idTipoBeneficio = $idTipoBeneficio;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDescuentoPorcentaje($descuentoPorcentaje) {
        $this->descuentoPorcentaje = $descuentoPorcentaje;
    }

    function setIdTipoPago($idTipoPago) {
        $this->idTipoPago = $idTipoPago;
    }

    function setIndicador($indicador) {
        $this->indicador = $indicador;
    }


}