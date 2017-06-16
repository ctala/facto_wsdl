<?php


 function autoload_7bcd0ad5e5486c1577736bca7c84cf0c($class)
{
    $classes = array(
        'ctala\Facto\Server' => __DIR__ .'/Server.php',
        'ctala\Facto\encabezado' => __DIR__ .'/encabezado.php',
        'ctala\Facto\detalle' => __DIR__ .'/detalle.php',
        'ctala\Facto\detalles' => __DIR__ .'/detalles.php',
        'ctala\Facto\referencia' => __DIR__ .'/referencia.php',
        'ctala\Facto\referencias' => __DIR__ .'/referencias.php',
        'ctala\Facto\descuentorecargoglobal' => __DIR__ .'/descuentorecargoglobal.php',
        'ctala\Facto\descuentorecargoglobales' => __DIR__ .'/descuentorecargoglobales.php',
        'ctala\Facto\totales' => __DIR__ .'/totales.php',
        'ctala\Facto\emitir_dte' => __DIR__ .'/emitir_dte.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7bcd0ad5e5486c1577736bca7c84cf0c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
