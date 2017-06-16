<?php

namespace ctala\Facto;

class encabezado
{

    /**
     * @var string $tipo_dte
     */
    protected $tipo_dte = null;

    /**
     * @var date $fecha_emision
     */
    protected $fecha_emision = null;

    /**
     * @var string $receptor_rut
     */
    protected $receptor_rut = null;

    /**
     * @var string $receptor_razon
     */
    protected $receptor_razon = null;

    /**
     * @var string $receptor_direccion
     */
    protected $receptor_direccion = null;

    /**
     * @var string $receptor_comuna
     */
    protected $receptor_comuna = null;

    /**
     * @var string $receptor_ciudad
     */
    protected $receptor_ciudad = null;

    /**
     * @var string $receptor_telefono
     */
    protected $receptor_telefono = null;

    /**
     * @var string $receptor_giro
     */
    protected $receptor_giro = null;

    /**
     * @var string $receptor_pais
     */
    protected $receptor_pais = null;

    /**
     * @var string $condiciones_pago
     */
    protected $condiciones_pago = null;

    /**
     * @var string $receptor_email
     */
    protected $receptor_email = null;

    /**
     * @var string $identificador_externo_doc
     */
    protected $identificador_externo_doc = null;

    /**
     * @param string $tipo_dte
     * @param date $fecha_emision
     * @param string $receptor_rut
     * @param string $receptor_razon
     * @param string $receptor_direccion
     * @param string $receptor_comuna
     * @param string $receptor_ciudad
     * @param string $receptor_telefono
     * @param string $receptor_giro
     * @param string $receptor_pais
     * @param string $condiciones_pago
     * @param string $receptor_email
     * @param string $identificador_externo_doc
     */
    public function __construct($tipo_dte, $fecha_emision, $receptor_rut, $receptor_razon, $receptor_direccion, $receptor_comuna, $receptor_ciudad, $receptor_telefono, $receptor_giro, $receptor_pais, $condiciones_pago, $receptor_email, $identificador_externo_doc)
    {
      $this->tipo_dte = $tipo_dte;
      $this->fecha_emision = $fecha_emision;
      $this->receptor_rut = $receptor_rut;
      $this->receptor_razon = $receptor_razon;
      $this->receptor_direccion = $receptor_direccion;
      $this->receptor_comuna = $receptor_comuna;
      $this->receptor_ciudad = $receptor_ciudad;
      $this->receptor_telefono = $receptor_telefono;
      $this->receptor_giro = $receptor_giro;
      $this->receptor_pais = $receptor_pais;
      $this->condiciones_pago = $condiciones_pago;
      $this->receptor_email = $receptor_email;
      $this->identificador_externo_doc = $identificador_externo_doc;
    }

    /**
     * @return string
     */
    public function getTipo_dte()
    {
      return $this->tipo_dte;
    }

    /**
     * @param string $tipo_dte
     * @return \WSDL\Facto\encabezado
     */
    public function setTipo_dte($tipo_dte)
    {
      $this->tipo_dte = $tipo_dte;
      return $this;
    }

    /**
     * @return date
     */
    public function getFecha_emision()
    {
      return $this->fecha_emision;
    }

    /**
     * @param date $fecha_emision
     * @return \WSDL\Facto\encabezado
     */
    public function setFecha_emision($fecha_emision)
    {
      $this->fecha_emision = $fecha_emision;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_rut()
    {
      return $this->receptor_rut;
    }

    /**
     * @param string $receptor_rut
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_rut($receptor_rut)
    {
      $this->receptor_rut = $receptor_rut;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_razon()
    {
      return $this->receptor_razon;
    }

    /**
     * @param string $receptor_razon
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_razon($receptor_razon)
    {
      $this->receptor_razon = $receptor_razon;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_direccion()
    {
      return $this->receptor_direccion;
    }

    /**
     * @param string $receptor_direccion
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_direccion($receptor_direccion)
    {
      $this->receptor_direccion = $receptor_direccion;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_comuna()
    {
      return $this->receptor_comuna;
    }

    /**
     * @param string $receptor_comuna
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_comuna($receptor_comuna)
    {
      $this->receptor_comuna = $receptor_comuna;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_ciudad()
    {
      return $this->receptor_ciudad;
    }

    /**
     * @param string $receptor_ciudad
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_ciudad($receptor_ciudad)
    {
      $this->receptor_ciudad = $receptor_ciudad;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_telefono()
    {
      return $this->receptor_telefono;
    }

    /**
     * @param string $receptor_telefono
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_telefono($receptor_telefono)
    {
      $this->receptor_telefono = $receptor_telefono;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_giro()
    {
      return $this->receptor_giro;
    }

    /**
     * @param string $receptor_giro
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_giro($receptor_giro)
    {
      $this->receptor_giro = $receptor_giro;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_pais()
    {
      return $this->receptor_pais;
    }

    /**
     * @param string $receptor_pais
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_pais($receptor_pais)
    {
      $this->receptor_pais = $receptor_pais;
      return $this;
    }

    /**
     * @return string
     */
    public function getCondiciones_pago()
    {
      return $this->condiciones_pago;
    }

    /**
     * @param string $condiciones_pago
     * @return \WSDL\Facto\encabezado
     */
    public function setCondiciones_pago($condiciones_pago)
    {
      $this->condiciones_pago = $condiciones_pago;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceptor_email()
    {
      return $this->receptor_email;
    }

    /**
     * @param string $receptor_email
     * @return \WSDL\Facto\encabezado
     */
    public function setReceptor_email($receptor_email)
    {
      $this->receptor_email = $receptor_email;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentificador_externo_doc()
    {
      return $this->identificador_externo_doc;
    }

    /**
     * @param string $identificador_externo_doc
     * @return \WSDL\Facto\encabezado
     */
    public function setIdentificador_externo_doc($identificador_externo_doc)
    {
      $this->identificador_externo_doc = $identificador_externo_doc;
      return $this;
    }

}
