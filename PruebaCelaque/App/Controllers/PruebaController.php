<?php
    namespace App\Controllers;
    use App\View;

    class PruebaController
    {
        public function index()
        {
            $file = VIEWS."prueba.php";
        if (is_readable($file)) {
                require $file;
            } else {
                throw new Exception("$file not found");
            }
        }

        public function calcularPrestamo($p, $r, $n){
            // Calcular el numerador de la fórmula
            $numerador = $p * $r * pow(1 + $r, $n);

            // Calcular el denominador de la fórmula
            $denominador = pow(1 + $r, $n) - 1;

            // Calcular la cuota mensual
            $cuotaMensual = $numerador / $denominador;
            require_once '../Models/guardarPrestamo.php';
            $guardar = new \App\Models\GuardarPrestamo();
            $guardar->guardarPrestamo($p.','.round($r,2).','.round($n,2).','.round($cuotaMensual,2));
            return round($cuotaMensual,2);
        }
        
    }
?>