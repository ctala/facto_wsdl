<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ctala\Facto;

/**
 * Description of DTE
 *
 * @author Cristian Tala <yomismo@cristiantala.cl>
 */
class DTE {
    /*
     * Variables del documento.
     */

    var $tipo_dte;
    var $fecha_emision;
    var $receptor_rut;
    var $receptor_razon;
    var $receptor_direccion;
    var $receptor_comuna;
    var $receptor_ciudad;
    var $receptor_telefono;
    var $receptor_giro;
    var $receptor_pais = NULL;
    var $condiciones_pago = "0";
    var $receptor_email = "";
    var $identificador_externo_doc = "";

    /*
     * Variables documento final 
     */
    var $encabezado;
    var $detalles = null;

    /*
     * Constantes asociadas a los DTE
     * 33 = Factura electrónica
      34 = Factura exenta electrónica
      39 = Boleta electrónica
      41 = Boleta exenta electrónica
      52 = Guía de despacho electrónica
      56 = Nota de débito electrónica
      61 = Nota de crédito electrónica
      110 = factura exportación electrónica
      111 = nota de débito de exportación electrónica
      112 = nota de crédito de exportación electrónica

     */

    const FACTURA_ELECTRONICA = 33;
    const FACTURA_ELECTRONICA_EXENTA = 34;
    const BOLETA_ELECTRONICA = 39;
    const BOLETA_ELECTRONICA_EXENTA = 41;
    const GUIA_DESPACHO_ELECTRONICA = 52;
    const NOTA_DEBITO_ELECTRONICA = 56;
    const NOTA_CREDITO_ELECTRONICA = 61;
    const FACTURA_EXPORTACION_ELECTRONICA = 110;
    const NOTA_DEBITO_EXPORTACION_ELECTRONICA = 111;
    const NOTA_CREDITO_EXPORTACION_ELECTRONICA = 112;

    function __construct($tipo_dte = null) {
        if ($tipo_dte == null) {
            $this->tipo_dte = DTE::FACTURA_ELECTRONICA_EXENTA;
        }
        $fecha_emision = date("Y-m-d");
        $this->fecha_emision = $fecha_emision;
    }

    /**
     * 
     * @param string $glosa Glosa del detalle
     * @param double $monto_unitario (Hasta 6 decimales por punto)
     * @param double $cantidad (Hasta 6 decimales por punto)
     * @param boolean $exento_afecto 0 = exento de IVA, 1 = afecto a IVA
     * @param type $descuentorecargo_porcentaje Porcentaje a descontar o recargar. Si es descuento usar negativo. Si se usa esto, no utilizar descuentorecargo_monto
     * @param integer $descuentorecargo_monto Monto a descontar recargar. Si es descuento usar negativo. Si se usa esto, no utilizar descuentorecargo_porcentaje
     * @param string $unidad Texto de unidad (Ej: kg)
     */
    function addDetalle($glosa, $monto_unitario, $cantidad = 1, $exento_afecto = 0, $descuentorecargo_porcentaje = 0.0, $descuentorecargo_monto = 0.0, $unidad = "") {

        $detalle = new detalle($cantidad, $unidad, $glosa, $monto_unitario, $exento_afecto, $descuentorecargo_monto, $descuentorecargo_porcentaje);

        if ($this->detalles == null) {
            $this->detalles = new detalles($detalle);
        } else {
            //TODO agregar arreglo detalles.   
        }

//        $this->detalles = $detalle;
    }

}
