<?php

namespace ctala\Facto;

class referencia
{

    /**
     * @var int $docreferencia_tipo
     */
    protected $docreferencia_tipo = null;

    /**
     * @var int $docreferencia_folio
     */
    protected $docreferencia_folio = null;

    /**
     * @var date $docreferencia_fecha
     */
    protected $docreferencia_fecha = null;

    /**
     * @var int $codigo_referencia
     */
    protected $codigo_referencia = null;

    /**
     * @var string $descripcion
     */
    protected $descripcion = null;

    /**
     * @param int $docreferencia_tipo
     * @param int $docreferencia_folio
     * @param date $docreferencia_fecha
     * @param int $codigo_referencia
     * @param string $descripcion
     */
    public function __construct($docreferencia_tipo, $docreferencia_folio, $docreferencia_fecha, $codigo_referencia, $descripcion)
    {
      $this->docreferencia_tipo = $docreferencia_tipo;
      $this->docreferencia_folio = $docreferencia_folio;
      $this->docreferencia_fecha = $docreferencia_fecha;
      $this->codigo_referencia = $codigo_referencia;
      $this->descripcion = $descripcion;
    }

    /**
     * @return int
     */
    public function getDocreferencia_tipo()
    {
      return $this->docreferencia_tipo;
    }

    /**
     * @param int $docreferencia_tipo
     * @return \WSDL\Facto\referencia
     */
    public function setDocreferencia_tipo($docreferencia_tipo)
    {
      $this->docreferencia_tipo = $docreferencia_tipo;
      return $this;
    }

    /**
     * @return int
     */
    public function getDocreferencia_folio()
    {
      return $this->docreferencia_folio;
    }

    /**
     * @param int $docreferencia_folio
     * @return \WSDL\Facto\referencia
     */
    public function setDocreferencia_folio($docreferencia_folio)
    {
      $this->docreferencia_folio = $docreferencia_folio;
      return $this;
    }

    /**
     * @return date
     */
    public function getDocreferencia_fecha()
    {
      return $this->docreferencia_fecha;
    }

    /**
     * @param date $docreferencia_fecha
     * @return \WSDL\Facto\referencia
     */
    public function setDocreferencia_fecha($docreferencia_fecha)
    {
      $this->docreferencia_fecha = $docreferencia_fecha;
      return $this;
    }

    /**
     * @return int
     */
    public function getCodigo_referencia()
    {
      return $this->codigo_referencia;
    }

    /**
     * @param int $codigo_referencia
     * @return \WSDL\Facto\referencia
     */
    public function setCodigo_referencia($codigo_referencia)
    {
      $this->codigo_referencia = $codigo_referencia;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
      return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return \WSDL\Facto\referencia
     */
    public function setDescripcion($descripcion)
    {
      $this->descripcion = $descripcion;
      return $this;
    }

}
