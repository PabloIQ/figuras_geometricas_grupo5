<?php
include_once 'FigurasGeometricas.php';

class Circulo extends FiguraGeometrica {
    private Punto $centro;
    private float $radio;

    public function __construct($centro, $radio) {
        $this->centro = $centro;
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function getCentro() {
        return $this->centro;
    }

    public function area() {
        return pi() * ($this->radio * $this->radio);
    }

    public function perimetro() {
        return 2 * pi() * $this->radio;
    }
}
?>
