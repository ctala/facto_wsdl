<?php

namespace ctala\Facto;

class detalle {

    /**
     * @var float $cantidad
     */
    protected $cantidad = null;

    /**
     * @var string $unidad
     */
    protected $unidad = null;

    /**
     * @var string $glosa
     */
    protected $glosa = null;

    /**
     * @var float $monto_unitario
     */
    protected $monto_unitario = null;

    /**
     * @var boolean $exento_afecto
     */
    protected $exento_afecto = null;

    /**
     * @var int $descuentorecargo_monto
     */
    protected $descuentorecargo_monto = null;

    /**
     * @var float $descuentorecargo_porcentaje
     */
    protected $descuentorecargo_porcentaje = null;

    /**
     * @var int $impuesto_codigo
     */
    protected $impuesto_codigo = null;

    /**
     * @var float $impuesto_valorunitario
     */
    protected $impuesto_valorunitario = null;

    /**
     * @param float $cantidad
     * @param string $unidad
     * @param string $glosa
     * @param float $monto_unitario
     * @param boolean $exento_afecto
     * @param int $descuentorecargo_monto
     * @param float $descuentorecargo_porcentaje
     */
    public function __construct($cantidad, $unidad, $glosa, $monto_unitario, $exento_afecto, $descuentorecargo_monto, $descuentorecargo_porcentaje, $impuesto_codigo = null, $impuesto_valorunitario = null) {
        $this->cantidad = $cantidad;
        $this->unidad = $unidad;
        $this->glosa = $glosa;
        $this->monto_unitario = $monto_unitario;
        $this->exento_afecto = $exento_afecto;
        $this->descuentorecargo_monto = $descuentorecargo_monto;
        $this->descuentorecargo_porcentaje = $descuentorecargo_porcentaje;
        $this->impuesto_codigo = $impuesto_codigo;
        $this->impuesto_valorunitario = $impuesto_valorunitario;
    }

    /**
     * @return float
     */
    public function getCantidad() {
        return $this->cantidad;
    }

    /**
     * @param float $cantidad
     * @return \WSDL\Facto\detalle
     */
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnidad() {
        return $this->unidad;
    }

    /**
     * @param string $unidad
     * @return \WSDL\Facto\detalle
     */
    public function setUnidad($unidad) {
        $this->unidad = $unidad;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlosa() {
        return $this->glosa;
    }

    /**
     * @param string $glosa
     * @return \WSDL\Facto\detalle
     */
    public function setGlosa($glosa) {
        $this->glosa = $glosa;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonto_unitario() {
        return $this->monto_unitario;
    }

    /**
     * @param float $monto_unitario
     * @return \WSDL\Facto\detalle
     */
    public function setMonto_unitario($monto_unitario) {
        $this->monto_unitario = $monto_unitario;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getExento_afecto() {
        return $this->exento_afecto;
    }

    /**
     * @param boolean $exento_afecto
     * @return \WSDL\Facto\detalle
     */
    public function setExento_afecto($exento_afecto) {
        $this->exento_afecto = $exento_afecto;
        return $this;
    }

    /**
     * @return int
     */
    public function getDescuentorecargo_monto() {
        return $this->descuentorecargo_monto;
    }

    /**
     * @param int $descuentorecargo_monto
     * @return \WSDL\Facto\detalle
     */
    public function setDescuentorecargo_monto($descuentorecargo_monto) {
        $this->descuentorecargo_monto = $descuentorecargo_monto;
        return $this;
    }

    /**
     * @return float
     */
    public function getDescuentorecargo_porcentaje() {
        return $this->descuentorecargo_porcentaje;
    }

    /**
     * @param float $descuentorecargo_porcentaje
     * @return \WSDL\Facto\detalle
     */
    public function setDescuentorecargo_porcentaje($descuentorecargo_porcentaje) {
        $this->descuentorecargo_porcentaje = $descuentorecargo_porcentaje;
        return $this;
    }
    
    function getImpuesto_codigo() {
        return $this->impuesto_codigo;
    }

    function getImpuesto_valorunitario() {
        return $this->impuesto_valorunitario;
    }

    function setImpuesto_codigo($impuesto_codigo) {
        $this->impuesto_codigo = $impuesto_codigo;
    }

    function setImpuesto_valorunitario($impuesto_valorunitario) {
        $this->impuesto_valorunitario = $impuesto_valorunitario;
    }



}
