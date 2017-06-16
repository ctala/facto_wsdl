<?php

namespace ctala\Facto;

class referencias
{

    /**
     * @var referencia $referencia
     */
    protected $referencia = null;

    /**
     * @param referencia $referencia
     */
    public function __construct($referencia)
    {
      $this->referencia = $referencia;
    }

    /**
     * @return referencia
     */
    public function getReferencia()
    {
      return $this->referencia;
    }

    /**
     * @param referencia $referencia
     * @return \WSDL\Facto\referencias
     */
    public function setReferencia($referencia)
    {
      $this->referencia = $referencia;
      return $this;
    }

}
