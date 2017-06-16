# Facto WSDL
Libreria PHP para generar DTEs con Facto.cl

## Instalación

```
composer require ctala/facto_wsdl
```

## Modo de uso

```

include_once 'vendor/autoload.php';

use ctala\Facto\DTE;

$dte = new DTE(DTE::FACTURA_ELECTRONICA_EXENTA);

$dte->receptor_rut = "16207214-5";
$dte->receptor_razon = "RAZON SOCIAL EMPRESA";
$dte->receptor_direccion = "MI DIRECCION";
$dte->receptor_comuna = "COMUNA";
$dte->receptor_ciudad = "SANTIAGO";
$dte->receptor_telefono = "+666666666";
$dte->receptor_giro = "ASESORIAS";
$dte->receptor_email = "YO@CORREO.CL";


/*
 * Generamos detalles
 */
$glosa = "Servicio de Pagos";
$monto_unitario = 20000.0;

$dte->addDetalle($glosa, $monto_unitario);

$dte->generarEncabezado();
$dte->procesarTotales();
$dte->generarDTE();

$dte->emitirDTE();


```



### Resultado

```
  object(stdClass)#14 (4) {
    ["dte_xml"]=>
    string(70) "https://descarga.facto.cl/2017/06/3233b5d5f6f797ced2548b38775aedb3.xml"
    ["dte_pdf"]=>
    string(70) "https://descarga.facto.cl/2017/06/ae8d21dcf76959f058d26841b70aed5e.pdf"
    ["dte_pdfcedible"]=>
    string(70) "https://descarga.facto.cl/2017/06/15742c73e12e14d3d78904c4e0b87e9f.pdf"
    ["dte_timbre"]=>
    string(70) "https://descarga.facto.cl/2017/06/13149e51a923359a51adf98946f34ab2.png"
  }


```