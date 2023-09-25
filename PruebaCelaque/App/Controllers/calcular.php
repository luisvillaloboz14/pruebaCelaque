<?php
    require_once 'PruebaController.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = doubleval($_POST["monto"]);
        $tasa = doubleval($_POST["tasa"])/12;
        $tasa = $tasa/100;
        $plazo = intval($_POST["plazo"]);

        $calculadora = new \App\Controllers\PruebaController();
        $resultado = $calculadora->calcularPrestamo($monto, $tasa, $plazo);
        $datos = json_encode(array('res'=>1,'dato' => $resultado));
        echo $datos;
    }
?>