<?php
class Cuadrado extends FigurasGeometrica {
    private float $lado;
    private Punto $esquina;

    // Constructor para inicializar el lado del cuadrado
    public function __construct(float $lado, Punto $esquina) {
        $this->lado = $lado;             // Asigna el valor al atributo $lado
        $this->esquina = $esquina;       // Asigna el valor al atributo $esquina
    }

    // Implementación del método abstracto calcularArea

    public function getLado() {
        return $this->lado;
    }

    public function area() {
        return $this->lado * $this->lado;
    }

    public function perimetro() {
        return $this->lado * 4;
    }
}
?>
