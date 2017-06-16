<?php

namespace ctala\Facto;

class detalles
{

    /**
     * @var detalle $detalle
     */
    protected $detalle = null;

    /**
     * @param detalle $detalle
     */
    public function __construct($detalle)
    {
      $this->detalle = $detalle;
    }

    /**
     * @return detalle
     */
    public function getDetalle()
    {
      return $this->detalle;
    }

    /**
     * @param detalle $detalle
     * @return \WSDL\Facto\detalles
     */
    public function setDetalle($detalle)
    {
      $this->detalle = $detalle;
      return $this;
    }

}
