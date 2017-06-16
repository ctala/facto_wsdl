<?php

namespace ctala\Facto;

class descuentorecargoglobal
{

    /**
     * @var string $descrec
     */
    protected $descrec = null;

    /**
     * @var float $valor
     */
    protected $valor = null;

    /**
     * @var string $tipovalor
     */
    protected $tipovalor = null;

    /**
     * @var string $glosa
     */
    protected $glosa = null;

    /**
     * @param string $descrec
     * @param float $valor
     * @param string $tipovalor
     * @param string $glosa
     */
    public function __construct($descrec, $valor, $tipovalor, $glosa)
    {
      $this->descrec = $descrec;
      $this->valor = $valor;
      $this->tipovalor = $tipovalor;
      $this->glosa = $glosa;
    }

    /**
     * @return string
     */
    public function getDescrec()
    {
      return $this->descrec;
    }

    /**
     * @param string $descrec
     * @return \WSDL\Facto\descuentorecargoglobal
     */
    public function setDescrec($descrec)
    {
      $this->descrec = $descrec;
      return $this;
    }

    /**
     * @return float
     */
    public function getValor()
    {
      return $this->valor;
    }

    /**
     * @param float $valor
     * @return \WSDL\Facto\descuentorecargoglobal
     */
    public function setValor($valor)
    {
      $this->valor = $valor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipovalor()
    {
      return $this->tipovalor;
    }

    /**
     * @param string $tipovalor
     * @return \WSDL\Facto\descuentorecargoglobal
     */
    public function setTipovalor($tipovalor)
    {
      $this->tipovalor = $tipovalor;
      return $this;
    }

    /**
     * @return string
     */
    public function getGlosa()
    {
      return $this->glosa;
    }

    /**
     * @param string $glosa
     * @return \WSDL\Facto\descuentorecargoglobal
     */
    public function setGlosa($glosa)
    {
      $this->glosa = $glosa;
      return $this;
    }

}
