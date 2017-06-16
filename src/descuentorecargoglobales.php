<?php

namespace ctala\Facto;

class descuentorecargoglobales
{

    /**
     * @var descuentorecargoglobal $descuentorecargoglobal
     */
    protected $descuentorecargoglobal = null;

    /**
     * @param descuentorecargoglobal $descuentorecargoglobal
     */
    public function __construct($descuentorecargoglobal)
    {
      $this->descuentorecargoglobal = $descuentorecargoglobal;
    }

    /**
     * @return descuentorecargoglobal
     */
    public function getDescuentorecargoglobal()
    {
      return $this->descuentorecargoglobal;
    }

    /**
     * @param descuentorecargoglobal $descuentorecargoglobal
     * @return \WSDL\Facto\descuentorecargoglobales
     */
    public function setDescuentorecargoglobal($descuentorecargoglobal)
    {
      $this->descuentorecargoglobal = $descuentorecargoglobal;
      return $this;
    }

}
