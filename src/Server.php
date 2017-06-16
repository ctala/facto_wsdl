<?php

namespace ctala\Facto;

class Server extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'encabezado' => 'ctala\\Facto\\encabezado',
      'detalle' => 'ctala\\Facto\\detalle',
      'detalles' => 'ctala\\Facto\\detalles',
      'referencia' => 'ctala\\Facto\\referencia',
      'referencias' => 'ctala\\Facto\\referencias',
      'descuentorecargoglobal' => 'ctala\\Facto\\descuentorecargoglobal',
      'descuentorecargoglobales' => 'ctala\\Facto\\descuentorecargoglobales',
      'totales' => 'ctala\\Facto\\totales',
      'emitir_dte' => 'ctala\Facto\\emitir_dte',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'authentication' => 0,
      'login' => '1.111.111-4/pruebaclientes',
      'password' => 'fb248222d0eb4ed0fae688af30c39dbe',
      'connection_timeout' => 60,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://conexion.facto.cl/documento.php?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param emitir_dte $documento
     * @return UNKNOWN
     */
    public function emitirDocumento(emitir_dte $documento)
    {
      return $this->__soapCall('emitirDocumento', array($documento));
    }

}
