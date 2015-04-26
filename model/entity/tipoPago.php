<?php

class TipoPago{
    private $idTipoPago;
    private $Descripcion;
    private $Monto;
    private $Obligatorio;
    private $Orden;
    private $Indicador;
    
    function getIdTipoPago() {
        return $this->idTipoPago;
    }

    function getDescripcion() {
        return $this->Descripcion;
    }

    function getMonto() {
        return $this->Monto;
    }

    function getObligatorio() {
        return $this->Obligatorio;
    }

    function getOrden() {
        return $this->Orden;
    }

    function getIndicador() {
        return $this->Indicador;
    }

    function setIdTipoPago($idTipoPago) {
        $this->idTipoPago = $idTipoPago;
    }

    function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    function setMonto($Monto) {
        $this->Monto = $Monto;
    }

    function setObligatorio($Obligatorio) {
        $this->Obligatorio = $Obligatorio;
    }

    function setOrden($Orden) {
        $this->Orden = $Orden;
    }

    function setIndicador($Indicador) {
        $this->Indicador = $Indicador;
    }


}