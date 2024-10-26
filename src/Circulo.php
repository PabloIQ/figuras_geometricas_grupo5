<?php
include_once 'Figura.php';
class Circulo extends FiguraGeometrica{
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

    public function area(float $radio) {
        $area = pi() * ($radio * $radio);
        return $area;
    }

    public function perimetro(float $radio) {
        $diametro = 2 * $radio;
        $perimetro = pi() * $diametro;
        return $perimetro;
    }
}
?>