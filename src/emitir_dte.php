<?php

namespace ctala\Facto;

class emitir_dte
{

    /**
     * @var encabezado $encabezado
     */
    protected $encabezado = null;

    /**
     * @var detalles $detalles
     */
    protected $detalles = null;

    /**
     * @var referencias $referencias
     */
    protected $referencias = null;

    /**
     * @var descuentorecargoglobales $descuentorecargoglobales
     */
    protected $descuentorecargoglobales = null;

    /**
     * @var totales $totales
     */
    protected $totales = null;

    /**
     * @param encabezado $encabezado
     * @param detalles $detalles
     * @param referencias $referencias
     * @param descuentorecargoglobales $descuentorecargoglobales
     * @param totales $totales
     */
    public function __construct($encabezado, $detalles, $referencias, $descuentorecargoglobales, $totales)
    {
      $this->encabezado = $encabezado;
      $this->detalles = $detalles;
      $this->referencias = $referencias;
      $this->descuentorecargoglobales = $descuentorecargoglobales;
      $this->totales = $totales;
    }

    /**
     * @return encabezado
     */
    public function getEncabezado()
    {
      return $this->encabezado;
    }

    /**
     * @param encabezado $encabezado
     * @return \WSDL\Facto\emitir_dte
     */
    public function setEncabezado($encabezado)
    {
      $this->encabezado = $encabezado;
      return $this;
    }

    /**
     * @return detalles
     */
    public function getDetalles()
    {
      return $this->detalles;
    }

    /**
     * @param detalles $detalles
     * @return \WSDL\Facto\emitir_dte
     */
    public function setDetalles($detalles)
    {
      $this->detalles = $detalles;
      return $this;
    }

    /**
     * @return referencias
     */
    public function getReferencias()
    {
      return $this->referencias;
    }

    /**
     * @param referencias $referencias
     * @return \WSDL\Facto\emitir_dte
     */
    public function setReferencias($referencias)
    {
      $this->referencias = $referencias;
      return $this;
    }

    /**
     * @return descuentorecargoglobales
     */
    public function getDescuentorecargoglobales()
    {
      return $this->descuentorecargoglobales;
    }

    /**
     * @param descuentorecargoglobales $descuentorecargoglobales
     * @return \WSDL\Facto\emitir_dte
     */
    public function setDescuentorecargoglobales($descuentorecargoglobales)
    {
      $this->descuentorecargoglobales = $descuentorecargoglobales;
      return $this;
    }

    /**
     * @return totales
     */
    public function getTotales()
    {
      return $this->totales;
    }

    /**
     * @param totales $totales
     * @return \WSDL\Facto\emitir_dte
     */
    public function setTotales($totales)
    {
      $this->totales = $totales;
      return $this;
    }

}
