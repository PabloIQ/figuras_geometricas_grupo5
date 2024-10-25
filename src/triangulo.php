<?php

include_once "Figura.php";

class triangulo extends FiguraGeometrica {

    private float $base;
    private float $altura;
    private float $lado1;
    private float $lado2;
    private float $lado3;
    private float $vertice;

    public function __construct($Punto, $base, $altura, $lado1, $lado2, $lado3) {
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }
    
    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function area() {
        ($this->base*$this->altura)/2;
    }

    public function perimetro() {
        $this->lado1 + $this->lado2 + $this->lado3;
    }
}

?>