<?php

class PagoMatricula{
    private $idPagoMatricula;
    private $TipoPago;
    private $ModoPago;
    private $TipoComprobante;
    private $Pago;
    private $PagoDesc;
    private $Beneficio;
    private $Fecha;
    private $Hora;
    private $idMatricula;
    private $Indicador;
    
    function getIdPagoMatricula() {
        return $this->idPagoMatricula;
    }

    function getTipoPago() {
        return $this->TipoPago;
    }

    function getModoPago() {
        return $this->ModoPago;
    }

    function getTipoComprobante() {
        return $this->TipoComprobante;
    }

    function getPago() {
        return $this->Pago;
    }

    function getPagoDesc() {
        return $this->PagoDesc;
    }

    function getBeneficio() {
        return $this->Beneficio;
    }

    function getFecha() {
        return $this->Fecha;
    }

    function getHora() {
        return $this->Hora;
    }
    
    function getIdMatricula() {
        return $this->idMatricula;
    }

    function getIndicador() {
        return $this->Indicador;
    }

    function setIdPagoMatricula($idPagoMatricula) {
        $this->idPagoMatricula = $idPagoMatricula;
    }

    function setTipoPago($TipoPago) {
        $this->TipoPago = $TipoPago;
    }

    function setModoPago($ModoPago) {
        $this->ModoPago = $ModoPago;
    }

    function setTipoComprobante($TipoComprobante) {
        $this->TipoComprobante = $TipoComprobante;
    }

    function setPago($Pago) {
        $this->Pago = $Pago;
    }

    function setPagoDesc($PagoDesc) {
        $this->PagoDesc = $PagoDesc;
    }

    function setBeneficio($Beneficio) {
        $this->Beneficio = $Beneficio;
    }

    function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    function setHora($Hora) {
        $this->Hora = $Hora;
    }

    function setIdMatricula($idMatricula) {
        $this->idMatricula = $idMatricula;
    }

    function setIndicador($Indicador) {
        $this->Indicador = $Indicador;
    }


}